<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventi;


class UserController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
        $this->_eventModel = new Eventi;
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
     
    public function Acquista($id_event) {

        $events = $this->_eventModel->getEvents();
        $event = $events->where('id', $id_event)->first();
        

        return view('acquista')
                        ->with('event', $event);
    }
    
    public function Acquista2($id_event) {

        $acquista = $this->_acquistaModel->getAcquist();
        $acquista = $acquistas->where('id', $id_event)->first();
        

        return view('acquista')
                        ->with('acquista', $acquista);
    }

}
