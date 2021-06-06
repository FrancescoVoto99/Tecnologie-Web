<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources\Event;
use App\Http\Requests\InsertEventRequeste;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

use App\Models\Eventi;

class AdminController extends Controller
{
     protected $_adminModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_eventModel = new Eventi;
        $this->_adminModel = new Admin;
    }

    public function index() {
        return view('admin');
    }
    public function MioAccaunt() {
        return view('MioAccauntAdmin');
    }
    
    public function showMyEvents() {

       $events = $this->_eventModel->getMyEvents(Auth::user()->id);
       
       
        return view('myevents')
                        ->with('events', $events);
    }

    public function addEvent() {
        return view('event.insert');
                       
    }
    
    public function editEvent($id_event) {
        
        $event = $this->_eventModel->getEvent($id_event);
        return view('event.editevent')
                            ->with('event',$event);
                       
    }

    public function storeEvent(InsertEventRequeste $request) {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = "default.jpg";
        }

        $event = new Event;
        
        $event->fill($request->validated());
        $event->image = $imageName;
        $event->societa=auth()->user()->societa;
        $event->admin=auth()->user()->id;
        $event->save();

        if ($imageName!="default.jpg") {
            //$destinationPath = public_path() . '/images/event';
            //$image->move($destinationPath, $imageName);
        };
        return response()->json(['redirect' => route('myevents')]);
        
    }

    public function storeeditEvent(InsertEventRequeste $request) {
        $event = Event::find($request->get('id'));
        
        $event->fill($request->validated());
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $event->image = $imageName;
        }
        $event->save();
          

        if (isset($imageName)) {
            $destinationPath = public_path() . '/images/event';
            $image->move($destinationPath, $imageName);
        }

        return response()->json(['redirect' => route('myevents')]);
    
}
    public function deletEvent($id_event){
       $this->_eventModel->deletEvent($id_event);
        return redirect()->action('AdminController@showMyEvents');
                        
    }
}