<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Document;
use App\Models\Head;
use App\Models\Independent;
use App\Models\Field;
use App\Models\Job;
use App\Models\Log;
use App\Models\ToJob;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use PDF;

class IndependentController extends Controller
{

    public function __construct()
    {
        $this->middleware('IsPermission:peserta');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = $this->peserta();
        if ($peserta == false) {
            return $this->home();
        }

        $job = ToJob::whereHas('users', function ($q) {
            $q->where('role', 'admin');
        })->get();

        return view('peserta.main', compact('job'));
    }

    public function piles($id)
    {
        $da = Job::where(DB::raw('md5(id)'), $id)->first();
        $pdf = Pdf::loadView('mitra.job.pile', compact('da'));
        // return view('mitra.job.pile',compact('da'));
        return $pdf->stream();
    }

    public function setting()
    {
        $independent = Field::where('user', Auth::user()->id)->first();
        $data = 'Data Peserta';
        return view('peserta.create', compact('data', 'independent'));
    }

    public function job()
    {    

        $head = Head::whereHas('peserta', function($q) {
            $q->where('user',Auth::user()->id);
        })->get();
        return view('peserta.job.index', compact('head'));
    }

    public function reg()
    {
        $comp = ToJob::whereHas('users', function ($q) {
            $q->where('role', 'admin');
        })->get();
        $data = 'Pendaftaran';
        return view('peserta.apply', compact('data', 'comp'));
    }

    public function apply(Request $request)
    {
        $rule = [
            'job' => 'required',
            'cv' => 'required|file|mimes:pdf|max:2048',
            'doc' => 'required|file|mimes:pdf|max:2048',
            'photo' => 'required|file|mimes:jpg,jpeg,png|max:1024',
        ];

        $request->validate($rule);

        $head = Head::where('field', Auth::user()->id)->where('job',$request->job)->first();

        if($head)
        {
            toastr()->error('Job sudah di apply');
            return back();
        }

        $job = Job::where('id', $request->job)->first();
        $field = Field::where('user', Auth::user()->id)->first();

        $head = new Head;
        $head->status = 1;
        $head->mitra = User::where('role','admin')->value('id');
        $head->field = $field->id;
        $head->company = $job->comp->id;
        $head->agen = $job->comp->agen->id;
        $head->job = $job->id;
        $head->type = 'mandiri';
        $head->save();

        $doc = new Document;
        $doc->head = $head->id;
        $cv = $request->file('cv');
        $ext = $cv->getClientOriginalExtension();
        $path = $cv->storeAs(
            'assets/data/mandiri/' . Auth::user()->id . '/cv_' . time() . '.' . $ext, ['disk' => 'public']
        );
        $doc->cv = $path;

        $dok = $request->file('doc');
        $ext = $dok->getClientOriginalExtension();
        $path = $dok->storeAs(
            'assets/data/mandiri/' . Auth::user()->id . '/doc_' . time() . '.' . $ext, ['disk' => 'public']
        );
        $doc->doc = $path;        

        $photo = $request->file('photo');
        $ext = $photo->getClientOriginalExtension();
        $path = $photo->storeAs(
            'assets/data/mandiri/' . Auth::user()->id . '/photo_' . time() . '.' . $ext, ['disk' => 'public']
        );
        $doc->photo = $path;
        $doc->save();

        $log = new Log;
        $log->in = Auth::user()->id;
        $log->to = $head->comp->agen->user;
        $log->args = 'Employee ' . $head->peserta->name . ' Apply to ' . $head->comp->name. ' ('.$job->type.')';
        $log->par = 'head';
        $log->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('peserta.jobs');
    }

    public function home()
    {
        $data = 'Data Peserta';
        return view('peserta.create', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [
            'name' => 'required',
            'hp' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
        ];

        $request->validate($rule);

        $field = Field::where('user', Auth::user()->id)->first();
        if(!$field)
        {
            $field = new Field;
        }

        $field->user = Auth::user()->id;
        $field->name = $request->name;
        $field->hp   = $request->hp;
        $field->gender = $request->gender;
        $field->residance = $request->alamat;
        $field->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Independent $independent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Independent $independent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Independent $independent)
    {
        //
    }
}
