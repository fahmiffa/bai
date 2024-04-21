<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    
    public function login()
    {                
        $data = 'Login';            
        return view('auth.login');
    } 

    public function signUp()
    {                
        $data = 'Registrasi';            
        return view('auth.reg');
    } 

    public function sign(Request $request)
    {
        $rule = [            
                'email' => 'required',
                'password' => 'required',     
            ];

        $request->validate($rule);

        $credensil = $request->only('email','password');;

        if (Auth::attempt($credensil)) {
            $user = Auth::user();                      
            return redirect()->route('home');             
        }                               
        toastr()->error('Oops! Something went wrong!');
        return back()->withInput();
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }

    public function reg(Request $request)
    {
        $rule = [            
            'name' => 'required',
            'email' => 'required|unique:users,email',                       
            'password' => 'required',                                    
            ];

        $request->validate($rule);

        $item = new User;
        $item->email = $request->email;
        $item->name = $request->name;
        $item->password = bcrypt($request->password);
        $item->role = 'peserta';
        $item->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return back();
    }
}
