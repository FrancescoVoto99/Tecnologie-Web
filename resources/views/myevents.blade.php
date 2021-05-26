@extends('layouts.admin')

@section('title','I miei Eventi')

@section('content')
<script type="text/javascript">

function ConfermaOperazione(id) {
var conferma = window.confirm("sei sicuro di voler eliminare l'evento");
if(conferma){
  window.location.href = {{ route('delete',id)}};  
}
else
return 
}
</script>

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
    <img src="images/event/{{ $event->image }}" alt="{{ $event->image }}" width="300" height="168" />
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
    <button type="button" onclick="{{ route('delete', [$event->id] }}">Elimina evento</button>
    <button type="button" onclick="{{ route('editevent', [$event->id] }}">Modifica evento</button>
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