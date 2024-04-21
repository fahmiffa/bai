<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Auth;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $da = Company::where('agency',Auth::user()->id)->latest()->get();
        $data = 'Data Company';
        return view('agency.company.index',compact('da','data'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = 'Add Company';
        return view('agency.company.create',compact('data')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [            
            'name' => 'required',
            'alamat' => 'required',
            'email' => 'required|unique:agencies,email',                  
            'leader' => 'required',    
            'hp' => 'required',                                     
            'web' => 'required',    
            'kanrihi' => 'required',                              
            ];

        $request->validate($rule);

        $item = new Company;
        $item->agency = Auth::user()->id;
        $item->name = $request->name;
        $item->email = $request->email;
        $item->alamat = $request->alamat;
        $item->leader = $request->leader;
        $item->hp = $request->hp;
        $item->website = $request->web;
        $item->kanrihi = $request->kanrihi;
        $item->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('company.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        $data = 'Edit Company';
        return view('agency.company.create',compact('data','company')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $rule = [            
            'name' => 'required',
            'alamat' => 'required',
            'email' => 'required|unique:agencies,email',                  
            'leader' => 'required',    
            'hp' => 'required',                                     
            'web' => 'required',    
            'kanrihi' => 'required',                              
            ];

        $request->validate($rule);

        $item = $company;        
        $item->name = $request->name;
        $item->email = $request->email;
        $item->alamat = $request->alamat;
        $item->leader = $request->leader;
        $item->hp = $request->hp;
        $item->website = $request->web;
        $item->kanrihi = $request->kanrihi;
        $item->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('company.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }
}
