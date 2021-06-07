@extends('layouts.public')

@section('title','Home')

@section('content')




<div id="tooplate_sidebar">
    <div class="sb_box">



        {{ Form::open(array('route' => 'eventifilter', 'id' => 'eventfilter')) }}

        <fieldset title="Cerca nelle descrizioni ">
            <legend class="cerca">Cerca nelle descrizioni</legend>
            {{ Form::text('cerca', '', [ 'id' => 'search-in']) }}
            <!--       <button style="background: url(images/lente4.png)" alt="Cerca" ></button>  --> 

        </fieldset>
        <br>


        <h3>CATEGORIE</h3> 
        <fieldset title="Scegli una categoria">
            {{ Form::label('cate', 'Calcio') }}
            {{Form::checkbox('cate[]', 'calcio') }}
            <br>
            {{ Form::label('cate', 'Basket') }}
            {{Form::checkbox('cate[]', 'basket') }}
            <br>
            {{ Form::label('cate', 'Pallavolo') }}
            {{Form::checkbox('cate[]', 'pallavolo') }}

        </fieldset>

        <br></br>

        <h3>DATA</h3>      

        <fieldset title="Scegli la data dell'evento">
            <legend class="cerca">Seleziona data (yyyy-mm): </legend>
            {{Form::month('dataOra')}}<br></br>
            
        </fieldset>
        <br></br>

        <h3>LUOGO</h3>      


        <fieldset title="Luogo ">
            <!--STQ:ITREGION-->
            {{Form::select('regg', [null => '<--Seleziona-->','Abruzzo' => 'Abruzzo', 'Basilicata' => 'Basilicata', 'Calabria' => 'Calabria',
                                     'Campania' => 'Campania', 'Emilia Romagna' => 'Emilia-Romagna', 'Friuli Venezia Giulia' => 'Friuli-Venezia Giulia',
                                     'Lazio' => 'Lazio', 'Liguria' => 'Liguria', 'Lombardia' => 'Lombardia',
                                     'Marche' => 'Marche', 'Molise' => 'Molise', 'Piemonte' => 'Piemonte',
                                    'Puglia' => 'Puglia', 'Sardegna' => 'Sardegna', 'Sicilia' => 'Sicilia',
                                    'Toscana' => 'Toscana', 'Trentino Alto Adige' => 'Trentino-Alto Adige', 'Umbria' => 'Umbria',
                                    "Valle d'Aosta" => "Valle d'Aosta", 'Veneto' => 'Veneto'])}}



        </fieldset>
        <br></br>
        @isset($societies)
        <h3>SOCIETA'</h3>

        <fieldset title="Società organizzatrice ">

            {{ Form::select('societa', $societies, ['class' => 'input','id' => 'catId']) }}

        </fieldset>
        @endisset($societies)
        <br></br>

        {{ Form::submit('Cerca') }}
        </form>{{ Form::close() }}
    </div>
</div>    

<div id="tooplate_content">
    @isset($events)

    @foreach ($events as $event)
    <h2><a name="{{ $event->id }}" href="{{ route('evento', [$event->id]) }}"> {{ $event->nomeEvento }}</a></h2>
    <img src="images/event/{{ $event->image }}" alt="{{ $event->image }}" width="300" height="168" />
    <div class="latofoto">
            
        
        <div class="prezzo"  style="float: right">
           @include('helpers/EventPrice')
                    </div>
        <div>
        <h3> Prezzo:</h3>
        </div>
        <br></br>
        <h3> Data:<b> {{date("d-m-Y H:i:s", strtotime($event->dataOra))}}</b>  </h3>
       
         <br></br>
          <h3>Biglietti disponibili:<b>{{ $event->bigliettiDisponibili-$event->bigliettiVenduti }}</b>  </h3>
        
   
    </div>
    <br></br><br></br>
    <p>{{ $event->descrizione}}</p>
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