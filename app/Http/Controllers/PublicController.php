<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewEventRequest;


use App\Models\Eventi;

class PublicController extends Controller
{
   
    protected $_eventModel;

    public function __construct() {
        $this->_eventModel = new Eventi;
    }

    public function showEventi() {

        //Categorie Top
        

        //Prodotti in sconto di tutte le categorie, ordinati per sconto decrescente
        // map estrae solo le categorie tra tutte le tuple
        $events = $this->_eventModel->getEvents();

        return view('home')
                        ->with('events', $events);
    }
    public function showEvento($id_event) {

        $events = $this->_eventModel->getEvents();
        $event = $events->where('id', $id_event)->first();
        

        return view('evento')
                        ->with('event', $event);
    }
    
    public function showEventiFilter( NewEventRequest $request) {

        //Categorie Top
        

        //Prodotti in sconto di tutte le categorie, ordinati per sconto decrescente
        // map estrae solo le categorie tra tutte le tuple
        $events = $this->_eventModel->getEvents();
        return view('eventi')
                        ->with('events', $events);
    }
    public function searchEventiFilter( NewEventRequest $request) {

        $events = $this->_eventModel->getEvents();
        if($request!=null){
        
        $filter=$request->validated();
        $new_date = date('Y-m-d', strtotime($filter['dataOra']));
        //$events = $events->whereIn('categorie', $filter['cate']);
        $events = $events->where('dataOra', $new_date);
        $events = $events->whereIn('regione', $filter['regg']);}
        
        return view('eventi')
                        ->with('events', $events);
    }
   

}
