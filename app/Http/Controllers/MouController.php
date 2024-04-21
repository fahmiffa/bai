<?php

namespace App\Http\Controllers;

use App\Models\Mou;
use Illuminate\Http\Request;
use App\Models\Job;
use Auth;
use PDF;
use DB;

class MouController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $da = Mou::all();
        $data = 'Document MOU';
        return view('agency.mou.index',compact('da','data'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $job = Job::whereHas('comp',function($q){
            $q->where('agency',Auth::user()->id);
        })->get();
        $data = 'Create Mou';
        return view('agency.mou.create',compact('data','job'));
    }

    public function pile($id)
    {     
        dd($id);
        $set = Setting::first(); 
        $da = Invoice::where(DB::raw('md5(id)'),$id)->first();   
        $pdf = Pdf::loadView('admin.invoices.pdf.tem'.$da->template,compact('da','set'));     
        // return view('admin.invoices.pdf.tem5',compact('da','set'));                          
        return $pdf->stream();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mou $mou)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mou $mou)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mou $mou)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mou $mou)
    {
 
    }
}
