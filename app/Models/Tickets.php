<?php

namespace App\Models;

use App\Models\Resources\Ticket;

class Tickets {

  
    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getTickets() {
       // da rivedere jhjhjhh
        $tickets = Ticket::where('id','!=',0)->get();
        return $tickets;
    }
    
    public function getTicketsbyuser($id_user) {
       // da rivedere jhjhjhh
        $tickets = Ticket::where('idutente',$id_user)->get();
        return $tickets;
    }
    
  
  
}