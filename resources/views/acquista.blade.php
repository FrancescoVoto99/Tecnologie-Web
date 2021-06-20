@extends('layouts.public')

@section('title','Home')
@section('scripts')

@parent

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
        $(function () {
            $('#someid')
                    .on('change', function (event) {
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


        <h3>Data:<b>{{date("d/m/Y", strtotime($event->dataOra))}}</b>   Ora:<b>{{date("H:i:s", strtotime($event->dataOra))}}</b></h3>
        <br>
        <h3>Prezzo biglietto :<b id="tiket">{{ number_format($prezzo, 2) }}</b>€</h3>
        <br>

        <h3 id="console">Numero di biglietti da acquistare:<input class="box12" name="quantita" id="someid" value="1" min="1" max="{{ $event->bigliettiDisponibili-$event->bigliettiVenduti }}" type="number" onkeypress="return isNumberKey(evt)"></h3>
        <br>
        <h3><b>Seleziona la modalità di pagamento:</b></h3>
        <h4><input type="radio" name="linguaggio"  value="carta" required><b>Carta di credito</b> </h4>
        <h4><input type="radio" name="linguaggio" value="html" required><b>Paypal</b></h4>
        <h4><input type="radio" name="linguaggio" value="html" required /><b>Conto corrente</b></h4>


        <br><br>
        <div class="move_botton">
       {{ Form::submit('Acquista', ['class' => 'butcton']) }}
                    <br><br>
        </div>
        <div>
            <h3><b>Totale:</b><input class="box12" type="number" name="prezzo" value="{{ number_format($prezzo, 2) }}" id="prezzo" readonly>€</h3>
           
        </div>
                                
                
          
            {{ Form::close() }}
              
                    <div class="cleaner h20"></div>

                    <br class="cleaner" />

                    @endisset()

                    </div>
                    @endsection