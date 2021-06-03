<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventi;
use App\Models\Tickets;
use App\Models\Resources\Ticket;
use App\Models\Resources\Event;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\BuyTickets;
use App\Http\Requests\UpdateUserRequeste;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class UserController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
        $this->_eventModel = new Eventi;
        $this->_ticketsModel = new Tickets;
    }

    public function index() {
        return view('user');
    }
    
     public function MioAccaunt() {
        return view('auth/MioAccaunt');
    }
 
    public function profileUpdate(UpdateUserRequeste $request){
        

        $user = User::find(auth()->user()->id);
        
        $user->fill($request->validated());
        $user->save();
        return redirect()->action('UserController@index');
    }
     
    public function Acquista($id_event) {

        $event = $this->_eventModel->getEvent($id_event);
        

        return view('acquista')
                        ->with('event', $event);
    }
    
    public function BuyTicket (BuyTickets $request, $idevento) {

        $ticket = new Ticket;
        $ticket->fill($request->validated());
        
        $ticket->idutente = auth()->user()->id;
        $ticket->idevento = $idevento;
        $ticket->save();
        $event = Event::find($idevento);
        $event->incassoTotale = $event->incassoTotale +$request->get('prezzo');
        $event->bigliettiVenduti = $event->bigliettiVenduti +$request->get('quantita');
        $event->save();
        return redirect()->action('UserController@MyTickets');
    }
    
    public function MyTickets() {
        $tickets=$this->_ticketsModel->getTicketsbyuser(auth()->user()->id);
        $events=$this->_eventModel->getAllEvents();
        
        $array=array();
        foreach ($events as $event){
           $array[$event->id] = $event;
        }
        return view('mytickets')
                        ->with('tickets', $tickets)
                        ->with('events',$array);
    }
    
    public function Acquista2($id_event) {

        $acquista = $this->_acquistaModel->getAcquist();
        $acquista = $acquistas->where('id', $id_event)->first();
        

        return view('acquista')
                        ->with('acquista', $acquista);
    }

}
