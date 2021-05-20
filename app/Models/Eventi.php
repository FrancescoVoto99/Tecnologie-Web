<?php

namespace App\Models;



use App\Models\Resources\Event;

class Eventi {

  
    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getEvents($order = null, $discounted = null) {
       // da rivedere jhjhjhh
        $prods = Event::where("sconto",null);
        if ($discounted != null) {
            $prods = $prods->whereNotNull('sconto');
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('discountPerc', $order);
        }
        return $prods->paginate(2);
    }
    
    public function getEvent($id_event) {
       // da rivedere jhjhjhh
        $prod = Event::where("id", $id_event);
        
        return $prod;
    }

}
