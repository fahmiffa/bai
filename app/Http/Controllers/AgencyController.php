<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AgencyController extends Controller
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
        $user = User::paginate(10);
        $data = 'Data Agency';
        return view('agency.index',compact('user','data'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = 'Add Agency';
        return view('agency.create',compact('data')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [            
            'name' => 'required',
            'noreg' => 'required',
            'alamat' => 'required',
            'email' => 'required|unique:agencies,email',                  
            'leader' => 'required',    
            'leaderNumber' => 'required',  
            'pic' => 'required',    
            'picNumber' => 'required',      
            'bankName' => 'required', 
            'bankBranch' => 'required', 
            'bankAddress' => 'required',                              
            'bankNumber' => 'required',    
            'bankHolder' => 'required',  
            'swiftCode' => 'required',                 
            ];

        $request->validate($rule);

        $item = New Agency;
        $item->user = Auth::user()->id;
        $item->name = $request->name;
        $item->noreg = $request->noreg;
        $item->alamat = $request->alamat;
        $item->email = $request->email;
        $item->leader = $request->leader;
        $item->leaderNumber = $request->leaderNumber;
        $item->pic = $request->pic;
        $item->picNumber = $request->picNumber;
        $item->bankName = $request->bankName;
        $item->bankBranch = $request->bankBranch;
        $item->bankAddress = $request->bankAddress;
        $item->bankNumber = $request->bankNumber;
        $item->bankHolder = $request->bankHolder;
        $item->swiftCode = $request->swiftCode;
        $item->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agency $agency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agency $agency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agency $agency)
    {
        $rule = [            
            'name' => 'required',
            'noreg' => 'required',
            'alamat' => 'required',
            'email' => 'required|unique:agencies,email,'.$agency->id,                  
            'leader' => 'required',    
            'leaderNumber' => 'required',  
            'pic' => 'required',    
            'picNumber' => 'required',                                    
            'bankName' => 'required', 
            'bankBranch' => 'required',             
            'bankAddress' => 'required',    
            'bankNumber' => 'required', 
            'bankHolder' => 'required',  
            'swiftCode' => 'required',                 
            ];

        $request->validate($rule);

        $item = $agency;  
        $item->name = $request->name;
        $item->noreg = $request->noreg;
        $item->alamat = $request->alamat;
        $item->email = $request->email;
        $item->leader = $request->leader;
        $item->leaderNumber = $request->leaderNumber;
        $item->pic = $request->pic;
        $item->picNumber = $request->picNumber;
        $item->bankNumber = $request->bankNumber;
        $item->bankBranch = $request->bankBranch;
        $item->bankName = $request->bankName;
        $item->bankAddress = $request->bankAddress;
        $item->bankHolder = $request->bankHolder;
        $item->swiftCode = $request->swiftCode;
        $item->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agency $agency)
    {
        //
    }
}
