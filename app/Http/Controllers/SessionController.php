<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['exept' => 'destroy']);
    }
    
    public function create()
    {
        return view('user.login');
    }



    public function store()
    {
        // $email = request('email');
        // $password = bcrypt(request('password'));
        if(! Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
              
            return back();
            
            }
        
        return redirect()->home();
        
    }



    public function destroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
