@extends('layouts.public')

@section('title','Home')

@section('content')



    
        <div id="tooplate_sidebar">
            <div class="sb_box">
                <h3>CATEGORIE</h3>      
                <form action="home12.php" method="post" >
                    <fieldset title="Scegli una categoria">
                        <label><input type="checkbox" name="cate[]" value="calcio" >Calcio </label><br></br>
                        <label><input type="checkbox" name= "cate[]" value="basket">Basket</label><br></br>
                        <label><input type="checkbox" name= "cate[]" value="pallavolo">Pallavolo</label><br></br>
                    </fieldset>

                    <br></br>

                    <h3>DATA</h3>      

                    <fieldset title="Scegli la data dell'evento">
                        <input type="date" name= "data" /><br></br>
                    </fieldset>
                    <br></br>

                    <h3>LUOGO</h3>      


                    <fieldset title="Luogo ">
                        <input type=hidden name=reg[] value=reggg><!--STQ:ITREGION-->
                        <div ID="divITREGION" style="display:inline"><p><span ID='errITREGION'></span>&nbsp; 
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
                                </select></div><!--EDQ:ITREGION-->
                    </fieldset>
                    <br></br>

                    <input type="submit" value="Invia">
                </form>
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