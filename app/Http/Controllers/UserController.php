<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('user');
    }
    
     public function MioAccaunt() {
        return view('MioAccaunt');
    }
    

public function update(User $user)
    { 

        $this->validate(request(), [
            'name' => 'required|string| max:255',
            'surname' => 'required| string| max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required| string| min:8| unique:users',
            'password' => 'required| string|min:8| confirmed',
        ]);

        $user->name = Request::input('name');
        $user->surname = Request::input('surname');
        $user->email = Request::input('email');
        $user->username = Request::input('username');
        $user->password = Hash::make(Request::input('password'));
        

        $user->save();
        
        return back();
    }

}
