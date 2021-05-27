@extends('layouts.public')

@section('title','I miei Eventi')

@section('content')


<div id="tooplate_sidebar">
    <div class="sb_box">
        <h3>Eventi</h3>  
        @isset($events)
        <ul class="lista_eventi">
            @foreach ($events as $event)
            <li><a href="#{{ $event->id }}">{{ $event->nomeEvento }}</a></li>
            @endforeach
        </ul>
        @endisset()
    </div>
</div>    

<div id="tooplate_content">
    @isset($events)

    @foreach ($events as $event)
    <h2><a name="{{ $event->id }}" href="{{ route('evento', [$event->id]) }}"> {{ $event->nomeEvento }}</a></h2>
    <img src="{{ asset('images/event/'.$event->image) }}" alt="{{ $event->image }}" width="300" height="168" />
    <div class="latofoto">
        <p>Prezzo:  {{ $event->prezzo }}</p>
        <br></br>
        <p>Biglietti disponibili: {{ $event->bigliettiDisponibili }} </p>
         <br></br>
        <p>Biglietti Venduti:  {{ $event->biglettiVenduti }}</p>
        <br></br>
        <p>Incasso Totale: {{ $event->incassoTotale }} </p>
    </div>
    <br></br><br></br>
    <p>{{ $event->descrizione}}</p>
     <form action="{{route('deletevent', [$event->id] )}}"> 
        <input type="submit" value="Elimina"> 
    </form>
    <br>
    <form action="{{route('editevent', [$event->id] )}}"> 
        <input type="submit" value="Modifica evento"> 
    </form>
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