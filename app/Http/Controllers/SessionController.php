<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }


    
    public function create()
    {
        return view('user.login');
    }



    public function store()
    {
        if(! Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
              
            return back()->withErrors(['message' => 'Please check your credentials']);
            
            }
        
        return redirect()->home();   
    }



    public function destroy()
    {
        Auth::logout();

        return redirect()->home();
    }
}
