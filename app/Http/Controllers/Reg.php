<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Head;
use App\Models\Interview as Inter;
use App\Models\ToJob;
use App\Models\Job;
use Auth;
use DB;

class Reg extends Controller
{
    public function index()
    {
        $data = 'Peserta Job';
        $da = Data::where('users_id', Auth::user()->id)->get();
        $head = Head::where('mitra', Auth::user()->id)->whereNull('field')->get();    
        return view('mitra.interview.index', compact('data', 'da','head'));
    }

    public function reg()
    {
        $data = 'Pendaftaran Peserta Job';
        $comp = ToJob::has('mou')->where('mitra', Auth::user()->id)->get();
        $da = Data::where('users_id', Auth::user()->id)->get();
        return view('mitra.interview.job', compact('data', 'comp','da'));
    }

    public function store(Request $request, $id)
    {
        $head = Head::where(DB::Raw('md5(id)'), $id)->first();

        if ($head) {

            if ($data->status == 5) {
                $rule = [
                    'wali' => 'required_without_all:ayah,ibu',
                    'ibu' => 'required_without_all:ayah,wali',
                    'ayah' => 'required_without_all:ibu,wali',
                ];
                $message = ['required_without_all' => 'Field Orang Tua/Wali harus disi'];

                $request->validate($rule, $message);

                if ($request->ayah) {
                    $val['ayah'] = $request->ayah;
                }

                if ($request->ibu) {
                    $val['ibu'] = $request->ibu;
                }

                if ($request->wali) {
                    $val['wali'] = $request->wali;
                }

                if ($request->kaka) {
                    $val['kaka'] = $request->kaka;
                }

                if ($request->adik) {
                    $val['adik'] = $request->adik;
                }

                $data->family = json_encode($val);
                $data->me = $request->me;
            }     
            if ($data->status == 4) {
                $rule = [
                    'studied' => 'required',
                    'first' => 'required',
                    'end' => 'required',
                ];
                $request->validate($rule);

                if (count($request->studied) > 0) {
                    $study = $request->studied;
                    $first = $request->first;
                    $end = $request->end;

                    for ($i = 0; $i < count($study); $i++) {
                        if ($study[$i] != null) {
                            $studied[] = [$study[$i], $first[$i], $end[$i]];
                        }
                    }

                    $data->study = json_encode($studied);
                }
            }
            if ($data->status == 3) {
                $rule = [
                    'magang' => 'required',
                    'one' => 'required',
                    'two' => 'required',
                    'ind' => 'required',
                    'magang_des' => 'required',

                ];
                $message = ['required' => 'Field ini harus disi'];
                $request->validate($rule, $message);

                if (count($request->magang) > 0) {
                    $com = $request->magang;
                    $first = $request->one;
                    $end = $request->two;
                    $ind = $request->ind;

                    for ($i = 0; $i < count($com); $i++) {
                        if ($com[$i] != null) {
                            $magang[] = [$com[$i], $first[$i], $end[$i], $ind[$i]];
                        }
                    }

                    $data->magang = json_encode($magang);
                }
                $data->magang_des = $request->magang_des;
            }
            if ($data->status == 2) {

                $rule = [
                    'lisensi'   => 'required',    
                    'waktu'     => 'required',    
                    'level'     => 'required', 
                    'job' => 'required',
                    'first' => 'required',
                    'end' => 'required',
                    'var' => 'required',
                    'job_des' => 'required',
                ];
                $message = ['required' => 'Field ini harus disi'];
                $request->validate($rule, $message);

                if(count($request->lisensi) > 0)
                {
                    $lins   = $request->lisensi;
                    $waktu = $request->waktu;     
                    $level   = $request->level;              

                    for ($i=0; $i < count($lins); $i++) {        
                        if($lins[$i] != null)
                        {
                            $lisensi[] = [$lins[$i],$waktu[$i],$level[$i]];
                        }         
                    }

                    $data->lisensi = json_encode($lisensi);           
                }    

                if (count($request->job) > 0) {
                    $com = $request->job;
                    $first = $request->first;
                    $end = $request->end;
                    $job = $request->var;

                    for ($i = 0; $i < count($com); $i++) {
                        if ($com[$i] != null) {
                            $jobs[] = [$com[$i], $first[$i], $end[$i], $job[$i]];
                        }
                    }

                    $data->job = json_encode($jobs);
                }
                $data->job_des = $request->job_des;
            }
            $data->status = $data->status - 1;
            $data->save();
            toastr()->success('Data has been saved successfully!', 'Congrats');
            if($data->status == 1)
            {
                return redirect()->route('interview.index');
            }
            return back();
        } else {
            $rule = [
                'job' => 'required',
                'peserta' => 'required',            
            ];
            $request->validate($rule);

            $job = Job::where('id',$request->job)->first();

            $head = new Head;
            $head->mitra = Auth::user()->id;
            $head->company = $job->comp->id;
            $head->agen = $job->comp->agen->id;
            $head->inter = $request->peserta;
            $head->type = 'partner';
            $head->job = $job->id;
            $head->save();

            toastr()->success('Data has been saved successfully!', 'Congrats');
            return redirect()->route('reg.index');
        }

    }
}
