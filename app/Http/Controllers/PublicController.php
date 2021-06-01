<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewEventRequest;


use App\Models\Eventi;
use App\Models\FAQs;

class PublicController extends Controller
{
   
    protected $_eventModel;

    public function __construct() {
        $this->_eventModel = new Eventi;
        $this->_FAQModel = new FAQs;
    }

    public function showEventi() {

        //Categorie Top
        

        //Prodotti in sconto di tutte le categorie, ordinati per sconto decrescente
        // map estrae solo le categorie tra tutte le tuple
        $events = $this->_eventModel->getEvents('asc');
       

        return view('home')
                        ->with('events', $events);
    }
    public function showEvento($id_event) {

        $event = $this->_eventModel->getEvent($id_event);
        
        

        return view('evento')
                        ->with('event', $event);
    }
    
    public function showEventiFilter( NewEventRequest $request) {

        //Categorie Top
        

        //Prodotti in sconto di tutte le categorie, ordinati per sconto decrescente
        // map estrae solo le categorie tra tutte le tuple
        $events = $this->_eventModel->getEvents();
        $societies= $this->_eventModel->getSocieties();
        return view('eventi')
                        ->with('events', $events)
                        ->with('societies', $societies);
    }
    public function searchEventiFilter( NewEventRequest $request) {
        $filter=$request->validated();
        $events = $this->_eventModel->getEventsFilter($filter);
        $societies= $this->_eventModel->getSocieties();
        return view('eventi')
                        ->with('events', $events)
                        ->with('societies', $societies);
    }
      public function showFAQ() {
        
        $faq = $this->_FAQModel->getFAQ();
     
        return view('FAQ')
                        ->with('faqs', $faq);
    }
   
}
