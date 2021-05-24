<?php

namespace App\Models;

use App\Models\Resources\FAQ;

class FAQ {

  
    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getFAQ($order = null, $discounted = null) {
       // da rivedere jhjhjhh
        $prods = FAQ::where('id','!=',0);
        if ($discounted != null) {
            $prods = $prods->whereNotNull('sconto');
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('discountPerc', $order);
        }
        
    }
   
    
    public function getEvent($id_event) {
       // da rivedere jhjhjhh
        $prod = FAQ::where("id", $id_event);
        return $prod;
    }

}