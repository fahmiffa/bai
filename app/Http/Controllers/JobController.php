<?php

namespace App\Http\Controllers;

use App\Models\Broadcast;
use App\Models\Company;
use App\Models\Job;
use App\Models\Log;
use App\Models\ToJob;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsPermission:agency');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $da = Job::whereHas('comp', function ($q) {
            $q->where('agency', Auth::user()->id);
        })->latest()->get();
        $data = 'Data Job';
        return view('agency.job.index', compact('da', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mitra = Broadcast::has('mou')->where('agency', Auth::user()->id)->get();
        $com = Company::where('agency', Auth::user()->id)->get();
        $data = 'Add Job';
        return view('agency.job.create', compact('data', 'com', 'mitra'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [
            'comp' => 'required',
            'type' => 'required',
            'residance' => 'required',
            'kouta' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'salary' => 'required',
            'allowance' => 'required',
        ];

        if ($request->pile) {
            $rules = ['pile' => 'file|mimes:pdf|max:2048'];
            $rule = array_merge($rule, $rules);
        }

        $request->validate($rule);

        if ($request->mitra == null) {
            toastr()->error('Invalid Mitra/LPK');
            return back();
        }

        $item = new Job;
        $item->company = $request->comp;
        $item->type = $request->type;
        $item->residance = $request->residance;
        $item->kouta = $request->kouta;
        $item->age = $request->age;
        $item->gender = $request->gender;
        $item->salary = $request->salary;
        $item->allowance = $request->allowance;
        $item->note = $request->note;
        $item->tojob = Auth::user()->to;

        $vid = $request->file('pile');
        if ($vid) {
            $ext = $vid->getClientOriginalExtension();
            $path = $vid->storeAs(
                'assets/data/company/' . time() . '.' . $ext, ['disk' => 'public']
            );

            $item->pile = $path;
        }
        $item->save();

        $val = $request->mitra;
        for ($i = 0; $i < count($val); $i++) {
            $to = new ToJob;
            $to->mitra = $val[$i];
            $to->job = $item->id;
            $to->save();

            $log = new Log;
            $log->in = Auth::user()->id;
            $log->to = $val[$i];
            $log->args = 'Job Company '.$to->jobs->comp->name;
            $log->par = 'job';
            $log->save();

        }

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('job.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $mitra = Broadcast::has('mou')->where('agency', Auth::user()->id)->get();
        $com = Company::where('agency', Auth::user()->id)->get();
        $data = 'Add Job';
        return view('agency.job.create', compact('data', 'com', 'job', 'mitra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $rule = [
            'comp' => 'required',
            'type' => 'required',
            'residance' => 'required',
            'kouta' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'salary' => 'required',
            'allowance' => 'required',
        ];

        if ($request->mitra == null) {
            toastr()->error('Invalid Mitra/LPK');
            return back();
        }

        if ($request->pile) {
            $rules = ['pile' => 'file|mimes:pdf|max:2048'];
            $rule = array_merge($rule, $rules);
        }

        $request->validate($rule);

        $item = $job;
        $item->company = $request->comp;
        $item->type = $request->type;
        $item->residance = $request->residance;
        $item->kouta = $request->kouta;
        $item->age = $request->age;
        $item->gender = $request->gender;
        $item->salary = $request->salary;
        $item->allowance = $request->allowance;
        $item->note = $request->note;

        $vid = $request->file('pile');
        if ($vid) {
            $ext = $vid->getClientOriginalExtension();
            $path = $vid->storeAs(
                'assets/data/company/' . time() . '.' . $ext, ['disk' => 'public']
            );

            $item->pile = $path;
        }
        $item->save();

        ToJob::where('job', $item->id)->delete();
        $val = $request->mitra;
        for ($i = 0; $i < count($val); $i++) {
            $to = new ToJob;
            $to->mitra = $val[$i];
            $to->job = $item->id;
            $to->save();
        }
        //send email broadcast to lpk

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }
}
