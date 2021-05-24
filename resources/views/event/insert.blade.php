@extends('layouts.admin')

@section('title', 'Area Admin')
@section('content')
<div class="tooplate_wrapper">
    <div class="tooplate_content" id="tooplate_content">
        <link rel="stylesheet" type="text/css" href="{{asset('css/interfaccia_login.css')}}" />
        <div  class="post_box">
            <h3>Aggiungi Prodotti</h3>
    <p>Utilizza questa form per inserire un nuovo prodotto nel Catalogo</p>
            </div>
        <br>
            {{ Form::open(array('route' => 'newevent.store', 'id' => 'addproduct', 'files' => true, 'class' => 'contact-form')) }}
            <div  class="post_box">
                {{ Form::label('nomeEvento', 'Nome Evento', ['class' => 'label-input']) }}
                {{ Form::text('nomeEvento', '', ['class' => 'input']) }}
                @if ($errors->first('nomeEvento'))
                <ul class="errors">
                    @foreach ($errors->get('nomeEvento') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <br>
            <div  class="post_box">
                {{ Form::label('categoria', 'Categoria', ['class' => 'label-input']) }}
                {{Form::select('categoria', ['calcio' => 'calcio', 'pallavolo' => 'pallavolo', 'basket' => 'basket'])}}
                @if ($errors->first('categoria'))
                <ul class="errors">
                    @foreach ($errors->get('categoria') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <br>
            <div  class="post_box">
                {{ Form::label('image', 'Immagine', ['class' => 'label-input']) }}
                {{ Form::file('image', ['class' => 'input', 'id' => 'image']) }}
                @if ($errors->first('image'))
                <ul class="errors">
                    @foreach ($errors->get('image') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <br>
            <div  class="post_box">
                {{ Form::label('bigliettiDisponibili', 'Biglietti Disponibili', ['class' => 'label-input']) }}
                {{ Form::text('bigliettiDisponibili', '', ['class' => 'input', 'id' => 'descShort']) }}
                @if ($errors->first('bigliettiDisponibili'))
                <ul class="errors">
                    @foreach ($errors->get('bigliettiDisponibili') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <br>
            <div  class="post_box">
                {{ Form::label('prezzo', 'Prezzo', ['class' => 'label-input']) }}
                {{ Form::text('prezzo', '', ['class' => 'input']) }}
                @if ($errors->first('prezzo'))
                <ul class="errors">
                    @foreach ($errors->get('prezzo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <br>
            <div  class="post_box">
                {{ Form::label('sconto', 'Sconto (%)', ['class' => 'label-input']) }}
                {{ Form::text('sconto', '', ['class' => 'input']) }}
                @if ($errors->first('sconto'))
                <ul class="errors">
                    @foreach ($errors->get('sconto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
               <div class="post_box2">
            <div  class="post_box">
                {{ Form::label('insconto', 'In Sconto', ['class' => 'label-input']) }}
                {{ Form::select('insconto', ['1' => 'Si', '0' => 'No'], 1, ['class' => 'input','id' => 'discounted']) }}
            </div>
                 <br>
            <div  class="post_box">
                {{ Form::label(
'descrizione', 'Descrizione', ['class' => 'label-input']) }}
                {{ Form::textarea('descrizione', '', ['class' => 'input', 'id' => 'descLong', 'rows' => 2]) }}
                @if ($errors->first('descrizione'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
              <br>
            <div  class="post_box">
                {{ Form::label('luogo', 'Inserisci la tag html del luogo dell evento', ['class' => 'label-input']) }}
                {{ Form::textarea('luogo', '', ['class' => 'input', 'id' => 'descLong', 'rows' => 2]) }}
                @if ($errors->first('luogo'))
                <ul class="errors">
                    @foreach ($errors->get('luogo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
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
                                    "Valle d'Aosta" => "Valle d'Aosta", 'Veneto' => 'Veneto'], ['class' => 'input'])}}
                @if ($errors->first('regione'))
                <ul class="errors">
                    @foreach ($errors->get('regione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
              <br>
            <div  class="post_box">
                {{ Form::label('raggiungere', 'Inserisci la tag html del luogo dell evento', ['class' => 'label-input']) }}
                {{ Form::textarea('raggiungere', 'In macchina:  In treno: In aereo:', ['class' => 'input']) }}
                @if ($errors->first('raggiungere'))
                <ul class="errors">
                    @foreach ($errors->get('raggiungere') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
                   <div style="display:none;">
                       {{ Form::text('admin', Auth::user()->id, ['class' => 'input',]) }}
                   </div>
            </div>
            <br>
            <div class="post_box">                
                {{ Form::submit('Aggiungi Evento', ['class' => 'form-btn1']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection