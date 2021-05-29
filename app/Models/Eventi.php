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
    
    public function getSocieties() {
       // da rivedere jhjhjhh
        $societies = Event::pluck('societa','admin');
        
        //$societies = $societies[];
         
        
        //array_unshift($societies,'<--Seleziona-->');
        return $societies;
    }
    
    public function getEventsFilter($filter, $order = null, $discounted = null) {
       // da rivedere jhjhjhh
        $events = Event::where('id','!=',0);
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
            if($filter['regg']!=null){
                $regione=array($filter['regg']);
                $events = $events->whereIn('regione', $regione);
            }
            if($filter['societa']!=null){
                $societa=array($filter['societa']);
                $events = $events->whereIn('admin', $societa);
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
    
    public function getMyEvents($id_admin) {
       // da rivedere jhjhjhh
        $events = Event::where("admin", $id_admin);
        return $events->paginate(2);
    }
    
    public function deletEvent ($id_event) {
       $event = Event::find($id_event);
        $event->delete();
        return;
        }

}
