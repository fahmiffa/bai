<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Field;
use App\Models\Invoice;
use App\Models\Job;
use App\Models\Patrner;
use App\Models\User;
use App\Models\Payment;
use Auth;
use App\Models\Log;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $agency = Agency::get()->count();
            $mitra = Patrner::get()->count();
            $job = Job::get()->count();
            $siswa = Field::get()->count();
            $payment = Invoice::all();

            $tot = 0;
            $mod = 0;
            foreach ($payment as $item) {              
                $mod += $item->sum;
                if($item->bills)
                {
                    $tot += $item->bills->nominal;
                }
            }   

            $log = Log::latest()->get();

            
            
            $paid = Payment::has('invoice')->sum('nominal');            
            $tot = abs($mod-$paid);
            return view('admin.main', compact('agency', 'mitra', 'job', 'siswa','tot','paid','log'));
        }

        if (Auth::user()->role == 'mitra') {
            return redirect()->route('mitra.index');
        }

        if (Auth::user()->role == 'agency') {
            return redirect()->route('agen.index');
        }

        if (Auth::user()->role == 'peserta') {
            return redirect()->route('independent.index');
        }
    }
}
