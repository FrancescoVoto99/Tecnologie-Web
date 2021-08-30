@extends('layouts.public')

@section('title','Home')

@section('content')
<div id="tooplate_content">
    @isset($event)
    <div style="float: right">
        @can('isUser')
        @if(isset($event->idparte))
        <h3><a style="color: red" href="{{ route('nonpartecipero', [$event->idparte,$event->id]) }}">Parteciperò<img  src="../images/cuorerosso.png" style="right"  width="25" height="25"></a></h3>
        @else
        <h3><a  href="{{ route('partecipero', [$event->id]) }}">Parteciperò<img  src="../images/cuorebianco.png" style=""  width="25" height="25"></a></h3>
        @endif
        @endcan('isUser')
      
    </div>
    <div>
        <h2>{{ $event->nomeEvento }}</h2> 
     </div>
    <img style="float: left" src="../images/event/{{ $event->image }}" alt="{{ $event->image }}" width="300" height="168" />
    <div class="latofoto1"> 
        
        <div class="prezzo"  style="float: right">
            @include('helpers/EventPrice')
        </div>
        <div>
            <h2> <b>Prezzo:</b></h2>
        </div>
        <br></br>
        <h4> Data:<b> {{date("d-m-Y H:i", strtotime($event->dataOra))}}</b>  </h4>

        <h4>Biglietti disponibili:<b>{{ $event->bigliettiDisponibili-$event->bigliettiVenduti }}</b>  </h3>

        @can('isUser')
        @if($event->bigliettiDisponibili-$event->bigliettiVenduti>0)
        <h3><a name="{{ $event->id }}" href="{{ route('acquista', [$event->id]) }}">Acquista<img  src="../images/carrello.png" style="right"  width="25" height="25" alt="acquista"></a></h3>
        @endif
        @endcan('isUser')
        <br>
        <br>
        
        
    </div>
    <h3> <b>Partecipanti: {{ $partecipero }} </b></h3>
    <br>
    <div class="sottofoto">


        <p>{{ $event->descrizione}}</p>
    </div>
    <br></br>




    <div style="float: left">
        <iframe id="map" src="{{ $event->luogo}}" width=250 height=170></iframe>
    </div>
 <div class="latofoto1">
     <h2> Come Raggiungerci:</h2>
        


    <p style="font-size: 14px">{{ $event->raggiungere}}</p>
 </div>
    <div class="cleaner h20"></div>

    <br class="cleaner" />

    @endisset()
</div>
<div id="tooplate_sidebar">
    <div class="sb_box">
        <h2><b>SOCIAL</b></h2>
        <a href="https://it-it.facebook.com/"><img src="../images/facebook-32x32.png" title="facebook" alt="facebook" /></a>
        <a href="https://twitter.com/"><img src="../images/twitter-32x32.png" title="twitter" alt="twitter" /></a>
        <a href="https://www.youtube.com/"><img src="../images/youtube-32x32.png" title="youtube" alt="youtube" /></a>
    </div>
</div>

@endsection
