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
            $prods = $prods->orderBy('dataOra', $order);
        }
        return $prods->paginate(2);
    }
    public function getEventsOrder($order) {
       // da rivedere jhjhjhh
        $events = Event::where('id','!=',0);
        
        
            $events = $events->orderBy('dataOra', $order)->get();
            $events=array($events);
            array_slice($events, 0, 2);
                    
        
        return $events;
    }
    
    public function getAllEvents() {
       // da rivedere jhjhjhh
        $events = Event::where('id','!=',0)->get();
        
        return $events;
    }
    
    public function getSocieties() {
       // da rivedere jhjhjhh
        
        $societies =Event::pluck('societa','admin')->toArray();
        
        $societies=array(null=>"<--Seleziona-->") + $societies;
        
        return $societies;
    }
    
    public function getEventsFilter($filter, $order = null) {
       // da rivedere jhjhjhh
        $events = Event::where('id','!=',0);
        
        if (!is_null($order)) {
            $events = $events->orderBy('discountPerc', $order);
    }       
    
        if($filter!=null){
            
            
            if(key_exists( 'cerca', $filter)){
            $events = $events->where('descrizione','like','%'.$filter['cerca'].'%');
            }
            if(key_exists( 'cate', $filter) ){
                $cate=$filter['cate'];
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
       
        return $events;
        
    }
    
    public function getEvent($id_event) {
       // da rivedere jhjhjhh
        $event = Event::where("id", $id_event)->first();
        return $event;
    }
    
    public function getMyEvents($id_admin) {
       // da rivedere jhjhjhh
        $events = Event::where("admin", $id_admin);
        return $events->paginate(2);
    }
    
    public function getStatistic($id_admin) {
       // da rivedere jhjhjhh
        $events = Event::select('bigliettiVenduti', 'incassoTotale')->where('admin', $id_admin)->get();
        return $events;
    }
    
    public function deletEvent ($id_event) {
       $event = Event::find($id_event);
        $event->delete();
        return;
        }

}
