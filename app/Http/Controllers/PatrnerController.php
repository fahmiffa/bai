<?php

namespace App\Http\Controllers;

use App\Models\Patrner;
use Illuminate\Http\Request;
use Auth;

class PatrnerController extends Controller
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
        //
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
            'alamat' => 'required',
            'email' => 'required|unique:patrners,email',                  
            'leader' => 'required',    
            'leaderNumber' => 'required',  
            'pic' => 'required',    
            'picNumber' => 'required',                                    
            'permit' => 'required',    
            'npwp' => 'required',  
            'bankNumber' => 'required',          
            'bankAddress' => 'required',          
            'bankHolder' => 'required',          
            'bankName' => 'required',          
            'swiftCode' => 'required',  
            'bankBranch' => 'required',   
            'doc' => 'required|file|mimes:pdf|max:2048',                     
            'logo' => 'required|file|mimes:jpeg,jpg,png|max:2048',          
            'stamp' => 'required|file|mimes:jpeg,jpg,png|max:2048',          
            'ttd' => 'required|file|mimes:jpeg,jpg,png|max:2048',                 
            ];

        $request->validate($rule);

        $item = new Patrner;
        $item->user = Auth::user()->id;        
        $item->name = $request->name;
        $item->alamat = $request->alamat;
        $item->email = $request->email;
        $item->leader = $request->leader;
        $item->leaderNumber = $request->leaderNumber;
        $item->pic = $request->pic;
        $item->picNumber = $request->picNumber;
        $item->permit = $request->permit;
        $item->npwp = $request->npwp;
        $item->bankNumber = $request->bankNumber;
        $item->bankBranch = $request->bankBranch;
        $item->bankName = $request->bankName;
        $item->bankAddress = $request->bankAddress;
        $item->bankHolder = $request->bankHolder;
        $item->swiftCode = $request->swiftCode;

        $doc = $request->file('doc'); 
        $ext = $doc->getClientOriginalExtension();
        $doc = $doc->storeAs(
            'assets/data/mitra/'.Auth::user()->id.'/izin.'.$ext, ['disk' => 'public']
        );    
        $item->permitFile = $doc;

        $logo = $request->file('logo'); 
        $ext = $logo->getClientOriginalExtension();
        $logo = $logo->storeAs(
            'assets/data/mitra/'.Auth::user()->id.'/logo.'.$ext, ['disk' => 'public']
        );    
        $item->logo = $logo;

        $stamp = $request->file('stamp'); 
        $ext = $stamp->getClientOriginalExtension();
        $stamp = $stamp->storeAs(
            'assets/data/mitra/'.Auth::user()->id.'/stamp.'.$ext, ['disk' => 'public']
        );    
        $item->stamp = $stamp;

        $ttd = $request->file('ttd'); 
        $ext = $ttd->getClientOriginalExtension();
        $ttd = $ttd->storeAs(
            'assets/data/mitra/'.Auth::user()->id.'/ttd.'.$ext, ['disk' => 'public']
        );    
        $item->ttd = $ttd;
        $item->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patrner $patrner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patrner $patrner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patrner $patrner)
    {
        $rule = [            
            'name' => 'required',
            'alamat' => 'required',
            'email' => 'required|unique:patrners,email,'.$patrner->id,                  
            'leader' => 'required',    
            'leaderNumber' => 'required',  
            'pic' => 'required',    
            'picNumber' => 'required',                                    
            'permit' => 'required',    
            'npwp' => 'required',  
            'bankNumber' => 'required',          
            'bankAddress' => 'required',          
            'bankHolder' => 'required',          
            'bankName' => 'required',     
            'bankBranch' => 'required',          
            'swiftCode' => 'required',                                      
            ];
        
        if($request->file('logo'))
        {
            $rule = array_merge(['logo' => 'file|mimes:jpeg,jpg,png|max:2048'],$rule);
        }

        if($request->file('doc'))
        {
            $rule = array_merge(['doc' => 'file|mimes:pdf|max:2048'],$rule);
        }

        if($request->file('stamp'))
        {
            $rule = array_merge(['stamp' => 'file|mimes:jpeg,jpg,png|max:2048'],$rule);
        }

        if($request->file('ttd'))
        {
            $rule = array_merge(['ttd' => 'file|mimes:jpeg,jpg,png|max:2048'],$rule);
        }

        $request->validate($rule);

        $item = $patrner;
        $item->name = $request->name;
        $item->alamat = $request->alamat;
        $item->email = $request->email;
        $item->leader = $request->leader;
        $item->leaderNumber = $request->leaderNumber;
        $item->pic = $request->pic;
        $item->picNumber = $request->picNumber;
        $item->permit = $request->permit;
        $item->npwp = $request->npwp;
        $item->bankNumber = $request->bankNumber;
        $item->bankBranch = $request->bankBranch;
        $item->bankName = $request->bankName;
        $item->bankAddress = $request->bankAddress;
        $item->bankHolder = $request->bankHolder;
        $item->swiftCode = $request->swiftCode;

        $doc = $request->file('doc'); 
        if($doc)
        {
            $ext = $doc->getClientOriginalExtension();
            $doc = $doc->storeAs(
                'assets/data/mitra/'.Auth::user()->id.'/izin.'.$ext, ['disk' => 'public']
            );    
            $item->permitFile = $doc;
        }

        $logo = $request->file('logo'); 
        if($logo)
        {
            $ext = $logo->getClientOriginalExtension();
            $logo = $logo->storeAs(
                'assets/data/mitra/'.Auth::user()->id.'/logo.'.$ext, ['disk' => 'public']
            );    
            $item->logo = $logo;
        }

        $stamp = $request->file('stamp'); 
        if($stamp)
        {
            $ext = $stamp->getClientOriginalExtension();
            $stamp = $stamp->storeAs(
                'assets/data/mitra/'.Auth::user()->id.'/stamp.'.$ext, ['disk' => 'public']
            );    
            $item->stamp = $stamp;
        }

        $ttd = $request->file('ttd'); 
        if($ttd)
        {
            $ext = $ttd->getClientOriginalExtension();
            $ttd = $ttd->storeAs(
                'assets/data/mitra/'.Auth::user()->id.'/ttd.'.$ext, ['disk' => 'public']
            );    
            $item->ttd = $ttd;
        }
        $item->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patrner $patrner)
    {
        //
    }
}
