<?php

namespace App\Models;



use App\Models\Resources\Event;

class Eventi {

  
    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getEvents($order = null, $discounted = null) {
       // da rivedere jhjhjhh
        $prods = Event::where('id','!=',0);
        if ($discounted != null) {
            $prods = $prods->whereNotNull('sconto');
        }
        if (!is_null($order)) {
            $prods = $prods->orderBy('discountPerc', $order);
        }
        return $prods->paginate(2);
    }
    public function getEventsFilter($filter, $order = null, $discounted = null) {
       // da rivedere jhjhjhh
        $events = Event::where("sconto",null);
        if ($discounted != null) {
            $events = $events->whereNotNull('sconto');
        }
        if (!is_null($order)) {
            $events = $events->orderBy('discountPerc', $order);
    }
        if($filter!=null){
            
            if(key_exists( 'cerca', $filter)){
            $events = $events->where("descrizione","LIKE",$filter['cerca']);
            }
            if(key_exists( 'cate', $filter) ){
                $cate=array($filter['cate']);
                $events = $events->whereIn('categoria', $cate);
            }
            if(key_exists( 'regg',$filter)){
                $regione=array($filter['regg']);
                $events = $events->whereIn('regione', $regione);
            }
             $new_date = date('Y-m-d', strtotime($filter['dataOra']));
           
                $events = $events->where('dataOra','>',$new_date);
        }
        return $events->paginate(2);
        
    }
    
    public function getEvent($id_event) {
       // da rivedere jhjhjhh
        $prod = Event::where("id", $id_event);
        return $prod;
    }

}
