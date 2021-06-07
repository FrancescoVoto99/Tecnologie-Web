@extends('layouts.public')

@section('title','Home')

@section('content')
<div id="tooplate_content">
    @isset($event)

    <h2>{{ $event->nomeEvento }}</h2>

    <img style="float: left" src="../images/event/{{ $event->image }}" alt="{{ $event->image }}" width="300" height="168" />
    <div class="latofoto1"> 
        
        <div class="prezzo"  style="float: right">
            @include('helpers/EventPrice')
        </div>
        <div>
            <h3> Prezzo:</h3>
        </div>
        <br></br>
        <h4> Data:<b> {{date("d-m-Y H:i:s", strtotime($event->dataOra))}}</b>  </h4>

        <h4>Biglietti disponibili:<b>{{ $event->bigliettiDisponibili-$event->bigliettiVenduti }}</b>  </h3>

        @can('isUser')
        @if($event->bigliettiDisponibili-$event->bigliettiVenduti>0)
        <h3><a name="{{ $event->id }}" href="{{ route('acquista', [$event->id]) }}">Acquista<img  src="../images/carrello.png" style="right"  width="25" height="25" alt="acquista"></a></h3>
        @endif
        @endcan('isUser')
        <br>
        <br>
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
<div id="tooplate_sidebar">
    <div class="sb_box">
        <h2><b>SOCIAL</b></h2>
        <a href="https://it-it.facebook.com/"><img src="../images/facebook-32x32.png" title="facebook" alt="facebook" /></a>
        <a href="https://twitter.com/"><img src="../images/twitter-32x32.png" title="twitter" alt="twitter" /></a>
        <a href="https://www.youtube.com/"><img src="../images/youtube-32x32.png" title="youtube" alt="youtube" /></a>
    </div>
</div>

@endsection
