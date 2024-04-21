<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Document;
use App\Models\Field;
use App\Models\Head;
use App\Models\Job;
use App\Models\ToJob;
use Auth;
use Illuminate\Http\Request;
use App\Models\Log;

class DocumentController extends Controller
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
        $mitra = $this->mitra();
        if($mitra == false) return redirect()->route('home');
        $data = 'Data Peserta';
        $da = Document::wherehas('heads',function($q){
            $q->where('mitra',Auth::user()->id);
        })->get();
        return view('mitra.peserta.index', compact('data', 'da'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = 'Tambah Peserta';        
        $comp = ToJob::has('mou')->where('mitra',Auth::user()->id)->get();
        return view('mitra.peserta.create', compact('data', 'comp'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [
            'job' => 'required',
            'name' => 'required',
            'residance' => 'required',
            'jenis' => 'required',
            'hp' => 'required',
            'gender' => 'required',
            'interview' => 'required',
            // 'departure' => 'required',
            'arrival' => 'required',
            'workStart' => 'required',
            'workEnd' => 'required',
            // 'monitoring' => 'required',
            'interest' => 'required',
            'cv' => 'required|file|mimes:pdf|max:2048',
            'pasport' => 'required|file|mimes:pdf|max:2048',
            'contract' => 'required|file|mimes:pdf|max:2048',
            'photo' => 'required|file|mimes:jpg,jpeg,png|max:1024',
            'residentCard' => 'required',
        ];

        $request->validate($rule);       

        $field = new Field;
        $field->user = Auth::user()->id;
        $field->name = $request->name;
        $field->jenis = $request->jenis;
        $field->residance = $request->residance;
        $field->hp = $request->hp;
        $field->gender = $request->gender;
        $field->interview = $request->interview;
        $field->arrival = $request->arrival;
        // $field->departure = $request->departure;
        $field->workStart = $request->workStart;
        $field->workEnd = $request->workEnd;
        // $field->complaint = $request->monitoring;
        $field->section = $request->interest;
        $field->save();

        $job = Job::where('id', $request->job)->first();

        $head = new Head;
        $head->status = 1;
        $head->mitra = Auth::user()->id;
        $head->field = $field->id;
        $head->company = $job->comp->id;
        $head->agen = $job->comp->agen->id;
        $head->job = $job->id;
        $head->type = 'partner';
        $head->save();


        $doc = new Document;
        $doc->head = $head->id;
        $cv = $request->file('cv');
        $ext = $cv->getClientOriginalExtension();
        $path = $cv->storeAs(
            'assets/data/mitra/' . Auth::user()->id . '/cv_' . time() . '.' . $ext, ['disk' => 'public']
        );
        $doc->cv = $path;
        $kontrak = $request->file('contract');
        $ext = $kontrak->getClientOriginalExtension();
        $path = $kontrak->storeAs(
            'assets/data/mitra/' . Auth::user()->id . '/kontrak_' . time() . '.' . $ext, ['disk' => 'public']
        );
        $doc->kontrak = $path;

        $pasport = $request->file('pasport');
        $ext = $pasport->getClientOriginalExtension();
        $path = $pasport->storeAs(
            'assets/data/mitra/' . Auth::user()->id . '/pasport_' . time() . '.' . $ext, ['disk' => 'public']
        );
        $doc->pasport = $path;

        $resident = $request->file('residentCard');
        $ext = $resident->getClientOriginalExtension();
        $path = $resident->storeAs(
            'assets/data/mitra/' . Auth::user()->id . '/residentCard_' . time() . '.' . $ext, ['disk' => 'public']
        );
        $doc->residentCard = $path;

        $photo = $request->file('photo');
        $ext = $photo->getClientOriginalExtension();
        $path = $photo->storeAs(
            'assets/data/mitra/' . Auth::user()->id . '/photo_' . time() . '.' . $ext, ['disk' => 'public']
        );
        $doc->photo = $path;
        $doc->save();



        $log       = new Log;
        $log->in   = Auth::user()->id;
        $log->to   = $head->comp->agen->user;
        $log->args = 'Employee '.$field->name. ' Apply to '.$head->comp->name. ' ('.$job->type.')';        
        $log->par  = 'head';
        $log->save();


        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('document.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        $data = 'Edit Peserta';
        $comp = Company::all();
        return view('mitra.peserta.create', compact('data', 'comp', 'document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $rule = [     
            'name' => 'required',
            'residance' => 'required',
            'jenis' => 'required',
            'hp' => 'required',
            'gender' => 'required',
            'interview' => 'required',
            // 'departure' => 'required',
            'arrival' => 'required',
            'workStart' => 'required',
            'workEnd' => 'required',
            // 'monitoring' => 'required',
            'interest' => 'required', 
        ];

        if ($request->file('cv')) {
            $rules = ['cv' => 'file|mimes:pdf|max:2048'];
            $rule = array_merge($rule, $rules);
        }

        if ($request->file('residentCard')) {
            $rules = ['residentCard' => 'file|mimes:pdf|max:2048'];
            $rule = array_merge($rule, $rules);
        }

        if ($request->file('contract')) {
            $rules = ['contract' => 'file|mimes:pdf|max:2048'];
            $rule = array_merge($rule, $rules);
        }

        if ($request->file('pasport')) {
            $rules = ['pasport' => 'file|mimes:pdf|max:2048'];
            $rule = array_merge($rule, $rules);
        }

        if ($request->file('photo')) {
            $rules = ['photo' => 'file|mimes:jpg,jpeg,png|max:2048'];
            $rule = array_merge($rule, $rules);
        }

        $request->validate($rule);

        $doc = $document;
        $cv = $request->file('cv');
        if($cv)
        {
            $ext = $cv->getClientOriginalExtension();
            $path = $cv->storeAs(
                'assets/data/mitra/' . Auth::user()->id . '/cv_' . time() . '.' . $ext, ['disk' => 'public']
            );
            $doc->cv = $path;
        }

        $kontrak = $request->file('contract');
        if($kontrak)
        {
            $ext = $kontrak->getClientOriginalExtension();
            $path = $kontrak->storeAs(
                'assets/data/mitra/' . Auth::user()->id . '/kontrak_' . time() . '.' . $ext, ['disk' => 'public']
            );
            $doc->kontrak = $path;
        }

        $pasport = $request->file('pasport');
        if($pasport)
        {
            $ext = $pasport->getClientOriginalExtension();
            $path = $pasport->storeAs(
                'assets/data/mitra/' . Auth::user()->id . '/pasport_' . time() . '.' . $ext, ['disk' => 'public']
            );
            $doc->pasport = $path;
        }

        $resident = $request->file('residentCard');
        if($resident)
        {
            $ext = $resident->getClientOriginalExtension();
            $path = $resident->storeAs(
                'assets/data/mitra/' . Auth::user()->id . '/residentCard_' . time() . '.' . $ext, ['disk' => 'public']
            );
            $doc->residentCard = $path;
        }

        $photo = $request->file('photo');
        if($photo)
        {
            $ext = $photo->getClientOriginalExtension();
            $path = $photo->storeAs(
                'assets/data/mitra/' . Auth::user()->id . '/photo_' . time() . '.' . $ext, ['disk' => 'public']
            );
            $doc->photo = $path;
        }
        $doc->save();

        $field = Field::where('head',$document->head)->first();
        $field->user = Auth::user()->id;
        $field->name = $request->name;
        $field->jenis = $request->jenis;
        $field->residance = $request->residance;
        $field->hp = $request->hp;
        $field->gender = $request->gender;
        $field->interview = $request->interview;
        $field->arrival = $request->arrival;
        // $field->departure = $request->departure;
        $field->workStart = $request->workStart;
        $field->workEnd = $request->workEnd;
        // $field->complaint = $request->monitoring;
        $field->section = $request->interest;
        $field->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('document.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->heads->field->delete();
        $document->heads->delete();
        $document->delete();
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }
}
