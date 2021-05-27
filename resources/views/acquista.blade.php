@extends('layouts.public')

@section('title','Home')

@section('content')

             <div id="tooplate_content">
                 <form>
                 <link rel="stylesheet" type="text/css" href="{{asset('css/bottoni.css')}}" />
                 @isset($event)
                 
              <h2>Acquisto del biglietto: {{ $event->nomeEvento }}</h2>
              
               
               <p>Data/Ora:{{ $event->dataOra }}</p>
                   <br>
              <p>Prezzo biglietto :{{ $event->prezzo }}</p>
                  <br>
                   
                    <p>Numero di biglietti da acquistare:<input name="someid"  value="1" min="1" max="{{ $event->bigliettiDisponibili }}" type="number" onkeypress="return isNumberKey(evt)"></p>
                    
                    <p><input type="radio" name="linguaggio"  value="carta"> Carta di credito</p>
                    <p><input type="radio" name="linguaggio" value="html">Paypal</p>
                    <p><input type="radio" name="linguaggio" value="html"/>Conto corrente</p>
                    <h2>Totale : {{ $event->prezzo }}</h2>
                    <input type="button" class="input" value=paga> 
                 
            </form>
               <div class="cleaner h20"></div>
                   
              <br class="cleaner" />
               
               @endisset()
             
                 </div>
@endsection