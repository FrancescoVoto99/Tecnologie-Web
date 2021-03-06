@extends('layouts.public')

@section('title','I miei Eventi')

@section('content')


<div id="tooplate_sidebar">
    <div class="sb_box">
                    <h2><b>SOCIAL</b></h2>
                    <a href="https://it-it.facebook.com/"><img src="../images/facebook-32x32.png" title="facebook" alt="facebook" /></a>
                <a href="https://twitter.com/"><img src="../images/twitter-32x32.png" title="twitter" alt="twitter" /></a>
                <a href="https://www.youtube.com/"><img src="../images/youtube-32x32.png" title="youtube" alt="youtube" /></a>
            </div>
</div>    

<div id="tooplate_content">
    @isset($events)

    @foreach ($events as $event)
    <h2><a name="{{ $event->id }}" href="{{ route('evento', [$event->id]) }}"> {{ $event->nomeEvento }}</a></h2>
    <a  href="{{ route('evento', [$event->id]) }}"> <img src="{{ asset('images/event/'.$event->image) }}" alt="{{ $event->image }}" width="300" height="168" /></a>
    <div class="latofoto">
       
    @php
    $prezzo=$event->prezzo;
    $prezzo=$event->insconto?round(($prezzo-($prezzo*$event->sconto)/100), 2):$prezzo;
@endphp



<div style="float: right">
         @if ($event->insconto)
        <h5> Valore <del>{{ number_format($event->prezzo, 2, ',', '.') }} €</del><br>
        Sconto {{ $event->sconto }}%</h5>
         
        @endif
       
        </div>
   
        <div>
    <h4>Prezzo: <b> {{ $prezzo }}</b> €</h4>
       
        </div>
       
        <h4>Biglietti totali: <b>{{ $event->bigliettiDisponibili }} </b></h4>
         
        <h4>Biglietti disponibili:<b> {{ $event->bigliettiDisponibili-$event->bigliettiVenduti }} </b></h4>
         
         <h4>Percentuale Biglietti Venduti:<b> {{ round(($event->bigliettiVenduti/$event->bigliettiDisponibili)*100,2) }} %</b></h4>
        
        <h4>Biglietti Venduti: <b>{{ $event->bigliettiVenduti }}</b></h4>
        
        <h4>Incasso Totale:<b> {{ $event->incassoTotale }} </b></h4>
        
    </div>
    <br></br><br></br>
    <p>{{ $event->descrizione}}</p>
    
       <div id="move_botton">
    <form action="{{route('editevent', [$event->id] )}}"> 
        <input class='butcton' type="submit" value="Modifica evento">
    </form>
       </div>
    <div>
    
         <form action="{{route('deletevent', [$event->id] )}}"> 
             <input class='butcton'  type="submit" value="Elimina">
    </form>
        </div>
   
        
    <div class="cleaner h20"></div>
    <br class="cleaner" />


    <hr> </hr>
    @endforeach
    <!--Paginazione-->
    @include('pagination.paginator', ['paginator' => $events])
    @endisset()
</div>



<!-- end of main -->

@endsection