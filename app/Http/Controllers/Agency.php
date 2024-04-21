<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agency as Agen;
use Auth;
use App\Models\Job;
use App\Models\Head;
use App\Models\Log;
use App\Models\Broadcast;
use App\Models\Company;

class Agency extends Controller
{    
    public function __construct()
    {  
        $this->middleware('IsPermission:agency');         
    }

    public function home()
    { 
        $data = 'Data Agency';
        return view('agency.create',compact('data'));     
    }


    public function setting()
    {
        $agency = Agen::where('user',Auth::user()->id)->first();
        $data = 'Add Agency';
        return view('agency.create',compact('data','agency')); 
    }

    
    public function index()
    {           
        $agency = $this->agency();
        if($agency == false) return $this->home();       
        
        $siswa = Head::whereHas('agency',function($q){
            $q->where('user',Auth::user()->id);
        })->count();

        $job = Job::whereHas('comp',function($q) {
            $q->where('agency',Auth::user()->id);
        })->latest()->count();

        $comp = Company::where('agency',Auth::user()->id)->count();

        $log = Log::where('in',Auth::user()->id)->orWhere('to',Auth::user()->id)->latest()->get();
        return view('agency.main',compact('job','log','comp','siswa'));
    }  
}
