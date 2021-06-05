@extends('layouts.public')

@section('title', 'Area Admin')

@section('scripts')

@parent
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    var actionUrl = "{{ route('newevent.store') }}";
    var formId = 'addevent';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addevent").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection

@section('content')
<div class="tooplate_wrapper">
    <div class="tooplate_content" id="tooplate_content">
        <link rel="stylesheet" type="text/css" href="{{asset('css/interfaccia_login.css')}}" />
        <div  class="post_box">
            <center><h1>INSERISCI EVENTO</h1></center>
    
            </div>
        <br>
            {{ Form::open(array('route' => 'newevent.store', 'id' => 'addevent', 'files' => true, 'class' => 'contact-form')) }}
           <div  class="post_box">
                {{ Form::label('nomeEvento', 'Nome Evento', ['class' => 'label-input']) }}
                {{ Form::text('nomeEvento', '', ['class' => 'input', 'id' => 'nomeEvento']) }}
               
            </div>
            <br>
            <div  class="post_box">
                {{ Form::label('categoria', 'Categoria', ['class' => 'label-input']) }}
                {{Form::select('categoria', ['calcio' => 'calcio', 'pallavolo' => 'pallavolo', 'basket' => 'basket'],['class' => 'input', 'id' => 'categoria'])}}
               
            </div>
            <br>
            <div  class="post_box">
                {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}

            </div>
            
            
            <div  class="post_box">
            {{ Form::label('dataOra', 'Data', ['class' => 'label-input']) }}
            <input id="dataOra" class="input" type="datetime-local" name="dataOra" value="{{ old('dataOra') }}">
            </div>
            
            
            <div  class="post_box">
                {{ Form::label('bigliettiDisponibili', 'Biglietti Disponibili', ['class' => 'label-input']) }}
                {{ Form::text('bigliettiDisponibili', '', ['class' => 'input', 'id' => 'bigliettiDisponibili']) }}
               
            </div>
            <br>
            <div  class="post_box">
                {{ Form::label('prezzo', 'Prezzo', ['class' => 'label-input']) }}
                {{ Form::text('prezzo', '', ['class' => 'input', 'id' => 'prezzo']) }}
               
            </div>
            <br>
            <div  class="post_box">
                {{ Form::label('sconto', 'Sconto (%)', ['class' => 'label-input']) }}
                {{ Form::text('sconto', '', ['class' => 'input', 'id' => 'sconto']) }}
               
            </div>
               <div class="post_box2">
            <div  class="post_box">
                {{ Form::label('insconto', 'In Sconto', ['class' => 'label-input']) }}
                {{ Form::select('insconto', ['1' => 'Si', '0' => 'No'], 1, ['class' => 'input','id' => 'insconto']) }}
            </div>
                 <br>
            <div  class="post_box">
                {{ Form::label(
'descrizione', 'Descrizione', ['class' => 'label-input']) }}
                {{ Form::textarea('descrizione', '', ['class' => 'input', 'id' => 'descrizione', 'rows' => 2]) }}
                
            </div>
              <br>
            <div  class="post_box">
                {{ Form::label('luogo', 'Inserisci la tag html del luogo dell evento', ['class' => 'label-input']) }}
                {{ Form::textarea('luogo', '', ['class' => 'input', 'id' => 'luogo', 'rows' => 2]) }}
                
              </div>
              <br>
             <div  class="post_box">
                {{ Form::label('regione', 'Regione', ['class' => 'label-input']) }}
                {{Form::select('regione', ['Abruzzo' => 'Abruzzo', 'Basilicata' => 'Basilicata', 'Calabria' => 'Calabria',
                                     'Campania' => 'Campania', 'Emilia Romagna' => 'Emilia-Romagna', 'Friuli Venezia Giulia' => 'Friuli-Venezia Giulia',
                                     'Lazio' => 'Lazio', 'Liguria' => 'Liguria', 'Lombardia' => 'Lombardia',
                                     'Marche' => 'Marche', 'Molise' => 'Molise', 'Piemonte' => 'Piemonte',
                                    'Puglia' => 'Puglia', 'Sardegna' => 'Sardegna', 'Sicilia' => 'Sicilia',
                                    'Toscana' => 'Toscana', 'Trentino Alto Adige' => 'Trentino-Alto Adige', 'Umbria' => 'Umbria',
                                    "Valle d'Aosta" => "Valle d'Aosta", 'Veneto' => 'Veneto'], ['class' => 'input','id' => 'regione'])}}
                
            </div>
              <br>
            <div  class="post_box">
                {{ Form::label('raggiungere', 'Inserisci la tag html del luogo dell evento', ['class' => 'label-input']) }}
                {{ Form::textarea('raggiungere', 'In macchina:  In treno: In aereo:', ['class' => 'input','id' => 'raggiungere']) }}
               
            </div>
                   <div style="display:none;">
                       {{ Form::text('admin', Auth::user()->id, ['class' => 'input','id' => 'admin']) }}
                   </div>
            </div>
            <div style="display:none;">
                       {{ Form::text('societa', Auth::user()->societa, ['class' => 'input','id' => 'societa']) }}
                   </div>
            <br>
            <div class="post_box">                
                {{ Form::submit('Aggiungi Evento', ['class' => 'form-btn1']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection