@extends('layouts.public')

@section('title','Home')

@section('content')




<div id="tooplate_sidebar">
    <div class="sb_box">

    </div>
</div>    

<div id="tooplate_content">
    <h2>I Miei Biglietti</h2>
    @isset($tickets)

    @foreach ($tickets as $ticket)
   <h2><a name="{{ $ticket->idevento }}" href="{{ route('evento', $events[$ticket->idevento]->id) }}"> {{ $events[$ticket->idevento]->nomeEvento }}</a></h2>
   <p>premi sul link qui sopra per avere indicazioni sull'evento</p>
   <img src="../images/event/{{ $events[$ticket->idevento]->image}}" alt="{{ $events[$ticket->idevento]->image }}" width="300" height="168" />
    <div class="latofoto">
        
        <h4>Data Evento:<b> {{date("d/m/Y H:i", strtotime($events[$ticket->idevento]->dataOra))}}</b></h4>
                   <br></br
                   
                  <br>
                  <h3>Hai acquistato: <b>{{ $ticket->quantita }}<b> Biglietti </h3>
                     <br>
                   <h4>Costo Totale: <b>{{ $ticket->prezzo }}</b> € </h4>
                      <br>          
                   <h4>Costo Singolo Biglietto: <b>{{ round($ticket->prezzo/$ticket->quantita,2) }}</b> € </h4>
                     <br> 
                    <h4>Acquistato il: <b> {{date("d/m/Y H:i:s", strtotime($ticket->dataOra))}}</b></h4>
                         
                     
                    <br>
                    <br>
              </div>
    <br></br><br></br>
    
    <div class="cleaner h20"></div>
    <br class="cleaner" />


    <hr> </hr>
    @endforeach
    <!--Paginazione-->
   
    @endisset()
</div>



<!-- end of main -->

@endsection