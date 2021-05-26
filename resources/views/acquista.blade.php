@extends('layouts.public')

@section('title','Home')

@section('content')

    

        
                <div id="tooplate_sidebar">
                    <div class="sb_box">
                        <h3>CATEGORIE</h3>
                       
                        
                    </div>

                </div> <!-- end of sidebar -->
             
           
             <div id="tooplate_content">
                 @isset($event)
                 
              <h2>{{ $event->nomeEvento }}</h2>
                    
               <img style="float: left" src="../images/event/{{ $event->image }}" alt="{{ $event->image }}" width="300" height="168" />
              <div class="latofoto1">  
               <p>Data:{{ $event->dataOra }}</p>
                   <br></br>
              <p>Prezzo:{{ $event->prezzo }}</p>
                  <br>
                   <p>Biglietti disponibili: {{ $event->bigliettiDisponibili }} </p>
                     <br>
                     <h2><a href="#{{ $event->id }}">Acquista<img  src="../images/carrello.png" style="right"  width="30" height="30" alt="eeee"></a></h2>
                 </div>
                   
            <div class="sottofoto">
                
                    
            <p>{{ $event->descrizione}}</p>
               </div>
              <br></br>
                   
                    
                
                    
             <div style="float: left">
             <iframe src="{{ $event->luogo}}" width=250 height=150></iframe>
             </div>
                    
              <p class="latofoto1"> come raggiungerci
               <br></br> 
                
                       
              <p>{{ $event->raggiungere}}</p>
                    
               <div class="cleaner h20"></div>
                   
              <br class="cleaner" />
               
               @endisset()
             </div>
     	
 
@endsection