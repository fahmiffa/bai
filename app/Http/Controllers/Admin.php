<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Head;
use App\Models\Mou;
use App\Models\Patrner;
use App\Models\Setting;
use App\Models\ToJob;
use App\Models\Job;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use PDF;
use App\Models\Field;
use App\Models\Invoice;
use App\Models\Bill;
use App\Models\Log;


class Admin extends Controller
{

    public function __construct()
    {
        $this->middleware('IsPermission:master');
    }

    public function padang()
    {
        $id = Auth::user()->id;
        $mitra = Patrner::where('user', $id)->first();           
        $head = Field::whereHas('head',function($q){
            $q->where('type','mandiri');
        })->get();
        $job = ToJob::where('mitra',Auth::user()->id)->get();   

        $inv = Invoice::where('mitra',Auth::user()->id)->where('type','ticket_pesawat')->get();
        $da = Bill::where('status',0)->where('mitra',Auth::user()->id)->get();
        return view('admin.padang.index', compact('id', 'mitra','job','head','inv','da'));
    }

    public function padangStore(Request $request, $user)
    {        
        $mitra = Patrner::where(DB::raw('md5(user)'), $user)->first();

        $rule = [
            'name' => 'required',
            'alamat' => 'required',            
            'leader' => 'required',
            'leaderNumber' => 'required',
            'pic' => 'required',
            'picNumber' => 'required',
            'permit' => 'required',
            'npwp' => 'required',
            'bankNumber' => 'required',
            'bankAddress' => 'required',
            'bankHolder' => 'required',
            'bankName' => 'required',
            'swiftCode' => 'required',
            'bankBranch' => 'required',
        ];

        if ($mitra) {

            $rule = array_merge(['email' => 'required|unique:patrners,email,'.$mitra->id], $rule);

            if ($request->file('logo')) {
                $rule = array_merge(['logo' => 'file|mimes:jpeg,jpg,png|max:2048'], $rule);
            }

            if ($request->file('doc')) {
                $rule = array_merge(['doc' => 'file|mimes:pdf|max:2048'], $rule);
            }

            if ($request->file('stamp')) {
                $rule = array_merge(['stamp' => 'file|mimes:jpeg,jpg,png|max:2048'], $rule);
            }

            if ($request->file('ttd')) {
                $rule = array_merge(['ttd' => 'file|mimes:jpeg,jpg,png|max:2048'], $rule);
            }
        } else {

            $rule = array_merge(['email' => 'required|unique:patrners,email'], $rule);

            $first = [
                'doc' => 'required|file|mimes:pdf|max:2048',
                'logo' => 'required|file|mimes:jpeg,jpg,png|max:2048',
                'stamp' => 'required|file|mimes:jpeg,jpg,png|max:2048',
                'ttd' => 'required|file|mimes:jpeg,jpg,png|max:2048',
            ];

            $rule = array_merge($first, $rule);
        }

        $request->validate($rule);

        if ($mitra) {
            $item = $mitra;
        } else {
            $item = new Patrner;
        }

        $item->user = Auth::user()->id;
        $item->name = $request->name;
        $item->alamat = $request->alamat;
        $item->email = $request->email;
        $item->leader = $request->leader;
        $item->leaderNumber = $request->leaderNumber;
        $item->pic = $request->pic;
        $item->picNumber = $request->picNumber;
        $item->permit = $request->permit;
        $item->npwp = $request->npwp;
        $item->bankNumber = $request->bankNumber;
        $item->bankBranch = $request->bankBranch;
        $item->bankName = $request->bankName;
        $item->bankAddress = $request->bankAddress;
        $item->bankHolder = $request->bankHolder;
        $item->swiftCode = $request->swiftCode;

        $doc = $request->file('doc');
        if ($doc) {
            $ext = $doc->getClientOriginalExtension();
            $doc = $doc->storeAs(
                'assets/data/mitra/' . Auth::user()->id . '/izin.' . $ext, ['disk' => 'public']
            );
            $item->permitFile = $doc;
        }

        $logo = $request->file('logo');
        if ($logo) {
            $ext = $logo->getClientOriginalExtension();
            $logo = $logo->storeAs(
                'assets/data/mitra/' . Auth::user()->id . '/logo.' . $ext, ['disk' => 'public']
            );
            $item->logo = $logo;
        }

        $stamp = $request->file('stamp');
        if ($stamp) {
            $ext = $stamp->getClientOriginalExtension();
            $stamp = $stamp->storeAs(
                'assets/data/mitra/' . Auth::user()->id . '/stamp.' . $ext, ['disk' => 'public']
            );
            $item->stamp = $stamp;
        }

        $ttd = $request->file('ttd');
        if ($ttd) {
            $ext = $ttd->getClientOriginalExtension();
            $ttd = $ttd->storeAs(
                'assets/data/mitra/' . Auth::user()->id . '/ttd.' . $ext, ['disk' => 'public']
            );
            $item->ttd = $ttd;
        }
        $item->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }

    public function billStore(Request $request)
    {
        $rule = [
            'siswa' => 'required',
            'nominal' => 'required',
        ];

        $request->validate($rule);

        $head = Head::where('field',$request->siswa)->first();

        $bill = new Bill;
        $bill->head = $head->id;
        $bill->mitra = Auth::user()->id;
        $bill->siswa = $request->siswa;
        $bill->nominal = $request->nominal;
        $bill->type = 'mandiri';
        $bill->save();

        $log = new Log;
        $log->in = Auth::user()->id;
        $log->to = $head->agency->user;
        $log->args = 'Tagihan Tiket Peswat '.$head->peserta->name;
        $log->par = 'ticket';
        $log->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');

        return redirect()->route('padang.index');

    }

    public function bill()
    {
        $siswa = Head::doesnthave('bill')->where('mitra',Auth::user()->id)->get();     
        $data = 'Tambah Tagihan';
        return view('admin.padang.bill',compact('data','siswa'));   
    }

    public function piles($id)
    {   
        $da = Job::where(DB::raw('md5(id)'), $id)->first();        
        $pdf = Pdf::loadView('mitra.job.pile', compact('da'));
        // return view('mitra.job.pile',compact('da'));
        return $pdf->stream();
    }

    public function agency()
    {
        $da = Agency::latest()->get();
        $data = 'Data Agency';
        return view('admin.agency.index', compact('da', 'data'));
    }

    public function mitra()
    {
        $da = Patrner::latest()->get();
        $data = 'Data Mitra';
        return view('admin.mitra.index', compact('da', 'data'));
    }

    public function job()
    {
        $da = ToJob::latest()->get();
        $data = 'Data Job';
        return view('admin.agency.job.index', compact('da', 'data'));
    }

    public function siswa()
    {
        $head = Head::latest()->get();
        $data = 'Data Siswa';
        return view('admin.siswa.index', compact('head', 'data'));
    }

    public function detail($id)
    {
        $head = Head::where(DB::raw('md5(id)'), $id)->first();
        $data = $head->peserta->name;
        return view('admin.siswa.detail', compact('head', 'data'));
    }

    public function setting()
    {
        $set = Setting::first();
        $data = 'Data Setting';
        return view('admin.setting.create', compact('set', 'data'));
    }

    public function store(Request $request)
    {
        $rule = [
            'bank' => 'required',
            'tax' => 'required',
        ];

        $request->validate($rule);

        $set = Setting::first();        
        if(!$set)
        {
            $set = New Setting;
        }
        $set->bank = $request->bank;
        $set->tax = $request->tax;
        $set->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }

    public function mou($id)
    {
        $agency = Agency::where(DB::raw('md5(id)'), $id)->first();
        $da = Mou::where('agency', $agency->id)->get();
        $data = 'Document ' . strtoupper($agency->name);
        return view('admin.agency.mou.index', compact('da', 'data', 'id'));
    }

    public function mouCreate($id)
    {
        $agency = Agency::where(DB::raw('md5(id)'), $id)->first();
        $data = 'Tambah Document MOU';
        return view('admin.agency.mou.create', compact('data', 'agency'));
    }

    public function mouEdit($id)
    {
        $mou = Mou::where(DB::raw('md5(id)'), $id)->first();
        $agency = Agency::where('id', $mou->agency)->first();
        $data = 'Edit Document MOU';
        $edit = true;
        return view('admin.agency.mou.create', compact('data', 'agency', 'mou'));
    }

    public function mouStore(Request $request, $id)
    {
        $rule = [
            'mitra' => 'required',
            'type' => 'required',
        ];

        $request->validate($rule);

        $agency = Agency::where(DB::raw('md5(id)'), $id)->first();
        $mou = new Mou;
        $mou->mitra = $request->mitra;
        $mou->type = $request->type;
        $mou->agency = $agency->id;
        $mou->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('admin.mou', ['id' => $id]);
    }

    public function mouUpdate(Request $request, $id)
    {

        $mou = Mou::where(DB::raw('md5(id)'), $id)->first();
        $rule = [
            'mitra' => 'required',
            'type' => 'required',
        ];

        $request->validate($rule);

        $mou->mitra = $request->mitra;
        $mou->type = $request->type;
        $mou->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('admin.mou', ['id' => md5($mou->agency)]);
    }

    public function mouDestroy(Request $request, $id)
    {
        $mou = Mou::where(DB::raw('md5(id)'), $id)->first();
        $mou->delete();
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }

    public function pile($id)
    {
        $mou = Mou::where(DB::raw('md5(id)'), $id)->first();
        $data = 'DOKUMEN ' . strtoupper(str_replace('_', ' ', $mou->type));
        $pdf = Pdf::loadView('admin.agency.mou.pdf.' . $mou->type, compact('mou', 'data'));
        // return view('admin.invoices.pdf.tem5',compact('da','set'));
        return $pdf->stream();
    }

}
