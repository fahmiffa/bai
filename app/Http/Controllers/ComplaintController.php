<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Patrner;
use App\Models\Head;
use Illuminate\Http\Request;
use Auth;

class ComplaintController extends Controller
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
        $da = Complaint::where('user',Auth::user()->id)->paginate(10);  
        $data = 'Data Monitoring';
        return view('agency.monitoring.index',compact('da','data')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $head = Head::whereHas('comp',function($q){
            $q->where('mitra',Auth::user()->id);
        })->doesntHave('monitoring')->get();
   
        $data = 'Add Monitoring';
        return view('agency.monitoring.create',compact('data','head')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [            
            'employee'   => 'required',              
            'note'       => 'required',                                                  
            ];

        $request->validate($rule);

        $complaint = new Complaint;
        $complaint->user = Auth::user()->id;
        $complaint->head = $request->employee;
        $complaint->note = $request->note;
        $complaint->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('complaint.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Complaint $complaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complaint $complaint)
    {
        $head = Head::whereHas('comp',function($q){
            $q->where('agency',Auth::user()->id);
        })->get();
        $data = 'Edit Monitoring';
        return view('agency.monitoring.create',compact('data','head','complaint')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Complaint $complaint)
    {
        $rule = [            
            'employee'   => 'required',              
            'note'       => 'required',                                                  
            ];

        $request->validate($rule);

        $complaint = $complaint;        
        $complaint->head = $request->employee;
        $complaint->note = $request->note;
        $complaint->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('complaint.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaint $complaint)
    {
        $complaint->delete();
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }
}
