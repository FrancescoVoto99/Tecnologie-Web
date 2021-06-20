<?php

namespace App\Models;

use App\Models\Resources\Partecipero;

class Parteciperos {

  
    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getParteciperobyEvent($id_evento) {
       // da rivedere jhjhjhh
        $partecipero = Partecipero::where('idevento',$id_evento)->get();
        $partecipero=$partecipero->count();
        return $partecipero;
    }
    
    public function getParteciperobyuser($id_user,$id_event) {
       // da rivedere jhjhjhh
        $partecipero = Partecipero::where('iduser',$id_user)->where('idevento',$id_event)->first();
        return $partecipero;
    }
    
    public function deletePartecipero ($id) {
       $partecipero = Partecipero::find($id);
        $partecipero->delete();
        
        }
        
    public function getEventbyid($id) {
       $partecipero = Partecipero::where('id',$id)->get();
        return $partecipero;
        
        }
}