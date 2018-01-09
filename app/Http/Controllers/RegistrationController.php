<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\User;

class RegistrationController extends Controller
{
    public function show()
    {
        return view('user.register');
    }
    
    public function store()
    {
        $this->validate(request(), [
            
            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required|confirmed'

        ]);

        $user = User::create(
            
            request(['name', 'email', 'password'])
        
        );

        auth()->login($user);

        return redirect('/');

    }
}
