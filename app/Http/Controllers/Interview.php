<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Interview as Inter;
use App\Models\ToJob;
use Auth;
use DB;
use Illuminate\Http\Request;

class Interview extends Controller
{
    //

    public function index()
    {
        $data = 'Peserta Interview';
        $da = Data::where('users_id', Auth::user()->id)->get();
        return view('mitra.interview.index', compact('data', 'da'));
    }

    public function create()
    {
        $data = 'Tambah Peserta';
        $comp = ToJob::has('mou')->where('mitra', Auth::user()->id)->get();
        return view('mitra.interview.create', compact('data', 'comp'));
    }

    public function edit($id)
    {
        $data = 'Edit Peserta';
        $da = Data::where(DB::Raw('md5(id)'), $id)->first();
        return view('mitra.interview.edit', compact('data', 'da'));
    }

    public function next($id)
    {
        $data = 'Tambah Peserta';
        $da = Data::where(DB::Raw('md5(id)'), $id)->first();
        return view('mitra.interview.step', compact('data', 'da'));
    }

    public function store(Request $request, $id)
    {
        $data = Data::where(DB::Raw('md5(id)'), $id)->first();

        if ($data) {

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
                'fullname' => 'required',
                'nik' => 'required',
                'alamat' => 'required',
                'email' => 'required',
                'hp' => 'required',
                'place_birth' => 'required',
                'religion' => 'required',
                'married' => 'required',
                'tall' => 'required',
                'weight' => 'required',
                'power' => 'required',
                'blood' => 'required',
                'hand' => 'required',
                'learning' => 'required',
                'look' => 'required',
                'japan' => 'required',
                'accident' => 'required',
                'sick' => 'required',
                'skill' => 'required',
                'hobbies' => 'required',
            ];
            $request->validate($rule);

            $data = new Data;
            $data->users_id = Auth::user()->id;
            $data->fullname = $request->fullname;
            $data->nik = $request->nik;
            $data->alamat = $request->alamat;
            $data->kec = $request->kec;
            $data->prov = $request->prov;
            $data->email = $request->email;
            $data->hp = $request->hp;
            $data->place_birth = $request->place_birth;
            $data->date_birth = $request->date_birth;
            $data->gender = $request->gender;
            $data->married = $request->married;
            $data->religion = $request->religion;
            $data->tall = $request->tall;
            $data->weight = $request->weight;
            $data->blood = $request->blood;
            $data->look = $request->look;
            $data->hobbies = $request->hobbies;
            $data->hand = $request->hand;
            $data->sick = $request->has('sick') ? 1 : 0;
            $data->accident = $request->has('accident') ? 1 : 0;
            $data->japan = $request->has('japan') ? 1 : 0;
            $data->smoker = $request->has('smoker') ? 1 : 0;
            $data->alkohol = $request->has('alkohol') ? 1 : 0;
            $data->skill = $request->skill;
            $data->learning = $request->learning;
            $data->power = $request->power;
            $data->status = 5;
            $data->save();

            toastr()->success('Data has been saved successfully!', 'Congrats');
            return redirect()->route('interview.next', ['id' => md5($data->id)]);
        }

    }

    public function update(Request $request, $id)
    {
        $da = Data::where(DB::Raw('md5(id)'),$id)->first();
        if($da)
        {    
            $data = $da;
            $data->alamat = $request->alamat;
            $data->kec = $request->kec;
            $data->prov = $request->prov;
            $data->fullname = $request->fullname;
            $data->email = $request->email;
            $data->hp = $request->hp;
            $data->nik = $request->nik;
            $data->gender = $request->gender;
            $data->place_birth = $request->place_birth;
            $data->date_birth= $request->date_birth;
            $data->married = $request->married;
            $data->religion = $request->religion;
            $data->tall = $request->tall;
            $data->weight = $request->weight;
            $data->blood = $request->blood;
            $data->look = $request->look;
            $data->hobbies = $request->hobbies;
            $data->hand = $request->hand;
            $data->sick = $request->has('sick') ? 1 : 0;
            $data->accident = $request->has('accident') ? 1 : 0;
            $data->japan = $request->has('japan') ? 1 : 0;
            $data->smoker = $request->has('smoker') ? 1 : 0;
            $data->alkohol = $request->has('alkohol') ? 1 : 0;
            $data->skill = $request->skill;
            $data->learning = $request->learning;
            $data->power = $request->power;       
            
            if($request->ayah)
            {                    
                $val['ayah'] = $request->ayah;
            }

            if($request->ibu)
            {     
                $val['ibu'] = $request->ibu;
            }

            if($request->wali)
            {                
                $val['wali'] = $request->wali;
            }

            if($request->kaka)
            {
                $val['kaka'] = $request->kaka;
            }

            if($request->adik)
            {
                $val['adik'] = $request->adik;
            }          

            $data->family = json_encode($val); 
            
            if(count($request->studied) > 0)
            {
                $study = $request->studied;
                $first = $request->first;     
                $end   = $request->end;     

                for ($i=0; $i < count($study); $i++) {        
                    if($study[$i] != null)
                    {
                        $studied[] = [$study[$i],$first[$i],$end[$i]];
                    }         
                }

                $data->study = json_encode($studied);           
            } 

            if(count($request->job) > 0)
            {
                $com   = $request->job;
                $first = $request->firstJob;     
                $end   = $request->endJob;     
                $job   = $request->var;     

                for ($i=0; $i < count($com); $i++) {        
                    if($com[$i] != null)
                    {
                        $jobs[] = [$com[$i],$first[$i],$end[$i],$job[$i]];
                    }         
                }

                $data->job = json_encode($jobs);           
            } 
            $data->job_des = $request->job_des;

            if(count($request->magang) > 0)
            {
                $com   = $request->magang;
                $first = $request->firstMagang;     
                $end   = $request->endMagang;     
                $ind   = $request->ind;     

                for ($i=0; $i < count($com); $i++) {        
                    if($com[$i] != null)
                    {
                        $magang[] = [$com[$i],$first[$i],$end[$i],$ind[$i]];
                    }         
                }

                $data->magang = json_encode($magang);           
            } 
            $data->magang_des = $request->magang_des;

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

            $data->me = $request->me;
            $data->save();

            toastr()->success('Data has been saved successfully!', 'Congrats');
            return redirect()->route('interview.index');
        }
        else
        {
            toastr()->error('Oops! Something went wrong!');
            return back();
        }
       

    }

}
