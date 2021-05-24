<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources\Event;
use App\Http\Requests\InsertEventRequeste;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     protected $_adminModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_adminModel = new Admin;
    }

    public function index() {
        return view('admin');
    }

    public function addEvent() {
        return view('event.insert');
                       
    }

    public function storeEvent(InsertEventRequeste $request) {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }

        $event = new Event;
        $event->fill($request->validated());
        $event->image = $imageName;
        $event->save();

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/event';
            $image->move($destinationPath, $imageName);
        };

        return redirect()->action('AdminController@index');
    }

}
