<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Models\Head;
use App\Models\Log;
use App\Models\Field;
use App\Models\Invoice;
use Auth;
use PDF;
use DB;
use App\Models\Setting;

class BillController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsPermission:mitra');          
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inv = Invoice::where('mitra',Auth::user()->id)->where('type','ticket_pesawat')->get();
        $da = Bill::where('status',0)->where('mitra',Auth::user()->id)->get();
        $data = 'Data Invoice - Bill';
        return view('mitra.bill.index',compact('da','data','inv'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Head::doesnthave('bill')->where('mitra',Auth::user()->id)->get();
        $data = 'Tambah Tagihan';
        return view('mitra.bill.create',compact('data','siswa'));   
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        $bill->type = 'mitra';
        $bill->save();

        $log = new Log;
        $log->in = Auth::user()->id;
        $log->to = $head->comp->agen->user;
        $log->args = 'Tagihan Tiket Peswat '.$head->peserta->name;
        $log->par = 'ticket';
        $log->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('bill.index');

    }

    public function bill($id)
    {
        $set = Setting::first();
        $da = Invoice::where(DB::raw('md5(id)'), $id)->first();
        $pdf = Pdf::loadView('admin.invoices.pdf.tem' . $da->template, compact('da', 'set'));
        // return view('admin.invoices.pdf.tem5',compact('da','set'));
        return $pdf->stream();
    }

    /**
     * Display the specified resource.
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bill $bill)
    {
        $siswa = Head::doesnthave('bill')->where('mitra',Auth::user()->id)->get();
        $data = 'Edit Tagihan';
        return view('mitra.bill.create',compact('data','siswa','bill'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bill $bill)
    {
        $rule = [  
            'nominal' => 'required',
        ];

        $request->validate($rule);

        $bill->nominal = $request->nominal;
        $bill->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('bill.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bill $bill)
    {
        $bill->delete();
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }
}
