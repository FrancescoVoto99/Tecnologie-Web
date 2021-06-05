@extends('layouts.public')

@section('title','Home')
@section('scripts')

@parent

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
        $(function () {
            $('#someid')
                    .on('click', function (event) {
                        var prezzo = $('#tiket').text() * $(this).val();
                
                        putprice(prezzo.toFixed(2));
                    });
        });
        function putprice(text) {
            $('#prezzo').val(text);
        }
    </script>

@endsection

@section('content')


<div id="tooplate_content">
    
 {{ Form::open(array('route' => ['buytickets','idevento'=>$event->id],'name' => 'miaform')) }}
    
        <link rel="stylesheet" type="text/css" href="{{asset('css/bottoni.css')}}" />
        @isset($event)
        
        @php
    $prezzo=$event->prezzo;
    $prezzo=$event->insconto?round(($prezzo-($prezzo*$event->sconto)/100), 2):$prezzo;
@endphp



        <h2>Acquisto del biglietto: {{ $event->nomeEvento }}</h2>


        <p>Data/Ora:{{ $event->dataOra }}</p>
        <br>
        <p >Prezzo biglietto :<b id="tiket">{{ number_format($prezzo, 2) }}</b>€</p>
        <br>

        <p id="console">Numero di biglietti da acquistare:<input name="quantita" id="someid" value="1" min="1" max="{{ $event->bigliettiDisponibili-$event->bigliettiVenduti }}" type="number" onkeypress="return isNumberKey(evt)"></p>

        <p><input type="radio" name="linguaggio"  value="carta" required> Carta di credito</p>
        <p><input type="radio" name="linguaggio" value="html" required>Paypal</p>
        <p><input type="radio" name="linguaggio" value="html" required /> Conto corrente</p>


        <br><br>
        
        <label><b>Totale:</b><input type="number" name="prezzo" value="{{ number_format($prezzo, 2) }}" id="prezzo" readonly>€</label>
                    <br><br>
                    
                    
                    
                 
           <div  class="post_box" style="display: none">
               
               {{ Form::text('idevento',$event->id) }}
                
          </div>
                    
                    
     

                                
                {{ Form::submit('Acquista', ['class' => 'butcton']) }}
          
            {{ Form::close() }}
              
                    <div class="cleaner h20"></div>

                    <br class="cleaner" />

                    @endisset()

                    </div>
                    @endsection