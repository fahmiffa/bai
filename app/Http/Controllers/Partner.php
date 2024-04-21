<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Patrner;
use App\Models\Job;
use App\Models\ToJob;
use App\Models\Broadcast;
use DB;
use PDF;
use App\Models\Log;
use App\Models\Document;
use App\Models\Bill;
use App\Models\Invoice;

class Partner extends Controller
{

    public function __construct()
    {
        $this->middleware('IsPermission:mitra');          
    }

    public function home()
    {
        $data = 'Data Mitra';
        return view('mitra.create',compact('data')); 
    }

    public function setting()
    { 
        $data = 'Data Mitra';
        $patrner = Patrner::where('user',Auth::user()->id)->first();
        return view('mitra.create',compact('data','patrner'));     
    }

    public function index()
    {    
        $mitra = $this->mitra();
        if($mitra == false) return $this->home();     
        $log = Log::where('to',Auth::user()->id)->orWhere('in',Auth::user()->id)->latest()->get();   
        $job = ToJob::has('mou')->where('mitra',Auth::user()->id)->count();  
        $siswa = Document::wherehas('heads',function($q){
            $q->where('mitra',Auth::user()->id);
        })->count();
        $inv = Invoice::where('mitra',Auth::user()->id)->where('type','ticket_pesawat')->count();
        return view('mitra.main',compact('log','job','siswa','inv'));     
    }  

    public function job()
    {
        $mitra = $this->mitra();
        if($mitra == false) return redirect()->route('home');
        $data = 'Data Job';  
        $da = ToJob::has('mou')->where('mitra',Auth::user()->id)->get();  
        return view('mitra.job.index',compact('data','da'));  
    }

    public function pile($id)
    {   
        $da = Job::where(DB::raw('md5(id)'), $id)->first();        
        $pdf = Pdf::loadView('mitra.job.pile', compact('da'));
        // return view('mitra.job.pile',compact('da'));
        return $pdf->stream();
    }

}
