@extends('layouts.public')

@section('title','Home')

@section('content')



    
        <div id="tooplate_sidebar">
            <div class="sb_box">
                <h3>CATEGORIE</h3>      
               {{ Form::open(array('route' => 'eventifilter', 'id' => 'eventfilter')) }}
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
                        echo Form::date('data', \Carbon\Carbon::now());<br></br>
                    </fieldset>
                    <br></br>

                    <h3>LUOGO</h3>      


                    <fieldset title="Luogo ">
                        <!--STQ:ITREGION-->
                       {{Form::select('size', ['L' => 'Large', 'S' => 'Small'])}}
                                <select name="regg[]" multiple>
                                    <option value=''>
                                    <option value="Abruzzo" >Abruzzo
                                    <option value="Basilicata" >Basilicata
                                    <option value="Calabria" >Calabria
                                    <option value="Campania" >Campania
                                    <option value="Emilia Romagna" >Emilia-Romagna
                                    <option value="Friuli Venezia Giulia" >Friuli-Venezia Giulia
                                    <option value="Lazio" >Lazio
                                    <option value="Liguria" >Liguria
                                    <option value="Lombardia" >Lombardia
                                    <option value="Marche" >Marche
                                    <option value="Molise" >Molise
                                    <option value="Piemonte" >Piemonte
                                    <option value="Puglia" >Puglia
                                    <option value="Sardegna" >Sardegna
                                    <option value="Sicilia" >Sicilia
                                    <option value="Toscana" >Toscana
                                    <option value="Trentino Alto Adige" >Trentino-Alto Adige
                                    <option value="Umbria" >Umbria
                                    <option value="Valle d'Aosta" >Valle d'Aosta
                                    <option value="Veneto" >Veneto
                            
                    </fieldset>
                    <br></br>

                    <input type="submit" value="Invia">
                </form>{{ Form::close() }}
            </div>
        </div>    

        <div id="tooplate_content">
            @isset($events)
 
            @foreach ($events as $event)
            <h2><a name="{{ $event->id }}" href="{{ route('evento', [$event->id]) }}"> {{ $event->nomeEvento }}</a></h2>
            <img src="images/tooplate_image_04.png" alt="Image 04" />
            <div class="latofoto">
                <p>Prezzo:  {{ $event->prezzo }}</p>
                <br></br>
                <p>Biglietti disponibili: {{ $event->bigliettiDisponibili }} </p>
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