<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Patrner;
use App\Models\Broadcast;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsPermission:master');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        $user = User::paginate(10);
        $data = 'Data User';
        return view('user.index',compact('user','data'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mitra = Patrner::all();
        $data = 'Tambah User';
        return view('user.create',compact('data','mitra')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rule = [            
            'name' => 'required',
            'email' => 'required|unique:users,email',                  
            'role' => 'required',    
            'password' => 'required',                                    
            ];

        $request->validate($rule);

        if($request->role == 'agency' && $request->cat == null)
        {
            toastr()->error('Invalid Category');
            return back();
        }

        if($request->role == 'agency' && $request->mitra == null)
        {
            toastr()->error('Invalid Mitra');
            return back();
        }

        $item = new User;
        $item->name = $request->name;
        $item->email = $request->email;
        if($request->role == 'agency')
        {
            $item->type = $request->cat;          
        }
        $item->role = $request->role;
        $item->password = bcrypt($request->password);
        $item->save();

        if($request->role == 'agency')
        {    
            $val = $request->mitra;
    
            for ($i=0; $i < count($val); $i++) 
            { 
                $mitra = new Broadcast;
                $mitra->mitra = $val[$i];
                $mitra->agency = $item->id;
                $mitra->save();
            }
        }

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {     
        $mitra = Patrner::all();
        $data = 'Edit user';
        return view('user.create',compact('data','user','mitra')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rule = [            
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,             
            'role' => 'required',                                        
            ];

        $request->validate($rule);

        if($request->role == 'agency' && $request->cat == null)
        {
            toastr()->error('Invalid Category');
            return back();
        }

        if($request->role == 'agency' && $request->mitra == null)
        {
            toastr()->error('Invalid Mitra');
            return back();
        }

        $item = $user;
        $item->name = $request->name;
        $item->email = $request->email;  
        if($request->role == 'agency')
        {
            $item->type = $request->cat;
        }
        $item->role = $request->role;
        if($request->password)
        {
            $item->password = bcrypt($request->password);
        }
        $item->save();

        
        if($request->role == 'agency')
        {
            Broadcast::where('agency',$item->id)->delete();
            $val = $request->mitra;
            for ($i=0; $i < count($val); $i++) 
            { 
                $mitra = new Broadcast;
                $mitra->mitra = $val[$i];
                $mitra->agency = $item->id;
                $mitra->save();
            }
        }
        

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }
}
