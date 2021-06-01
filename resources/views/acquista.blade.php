@extends('layouts.public')

@section('title','Home')

@section('content')


<div id="tooplate_content">
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

    <form name="miaform">
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

        <p id="console">Numero di biglietti da acquistare:<input name="someid" id="someid" value="1" min="1" max="{{ $event->bigliettiDisponibili }}" type="number" onkeypress="return isNumberKey(evt)"></p>

        <p><input type="radio" name="linguaggio"  value="carta"> Carta di credito</p>
        <p><input type="radio" name="linguaggio" value="html">Paypal</p>
        <p><input type="radio" name="linguaggio" value="html"/> Conto corrente</p>


        <br><br>
        
        <label><b>Totale:</b><input type="number" value="{{ number_format($prezzo, 2) }}" id="prezzo" readonly>€</label>
                    <br><br>

                    <input type="button" class="input" value=paga> 

                    </form>
                    <div class="cleaner h20"></div>

                    <br class="cleaner" />

                    @endisset()

                    </div>
                    @endsection