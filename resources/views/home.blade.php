@extends('layouts.public')

@section('title','Home')

@section('content')
<div id="tooplate_main">
<div id="tooplate_sidebar">
    <div class="sb_box">
                    <h2><b>SOCIAL</b></h2>
                    <a href="https://it-it.facebook.com/"><img src="images/facebook-32x32.png" title="facebook" alt="facebook" /></a>
                <a href="https://twitter.com/"><img src="images/twitter-32x32.png" title="twitter" alt="twitter" /></a>
                <a href="https://www.youtube.com/"><img src="images/youtube-32x32.png" title="youtube" alt="youtube" /></a>
            </div>
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
    
<img width="75%"src="images/sport1.jpg" alt="sport" align="right">
<div id="tooplate_content">
    <h2>Prossimi Eventi:</h2>
    @isset($events)
    @foreach ($events as $event)
   

    <div class="col_2 float_r">
         
         <h2><a name="{{ $event->id}}" href="{{route('evento',[$event->id])}}">{{ $event->nomeEvento}}</a></h2>
   <img src="images/event/{{ $event->image }}" alt="{{ $event->image }}" width="250" height="128" class="image_frame" />
                <p><em>{{$event->descrizione}} </em></p>
    <br>
   
    <div class="cleaner h20"></div>
    <br class="cleaner" />
    </div>
    @endforeach 
    @endisset()
    
</div>
<div class="cleaner"></div>

</div>

<!-- end of main -->

@endsection