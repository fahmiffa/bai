<?php

namespace App\Http\Controllers;

use App\Models\Broadcast;
use App\Models\Job;
use App\Models\Agency;
use App\Models\Patrner;
use Illuminate\Http\Request;
use Auth;
use DB;

class BroadcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $da = Broadcast::all();
        $data = 'Job Order';
        return view('admin.agency.job.index',compact('da','data'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        $mitra = Patrner::all();
        $agency = Agency::all();       
        $data = 'Tambah Job Order';
        return view('admin.agency.job.create',compact('mitra','agency','data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [            
            'agency'   => 'required',              
            'mitra'       => 'required',                                                  
            ];

        $request->validate($rule);
    }

    /**
     * Display the specified resource.
     */
    public function show(Broadcast $broadcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Broadcast $broadcast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Broadcast $broadcast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Broadcast $broadcast)
    {
        //
    }
}
