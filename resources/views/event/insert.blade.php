@extends('layouts.admin')

@section('title', 'Area Admin')

@section('content')
<div class="tooplate_wrapper">
    <div class="tooplate_content">
    <h3>Aggiungi Prodotti</h3>
    <p>Utilizza questa form per inserire un nuovo prodotto nel Catalogo</p>

    
        <div class="post_box">
            {{ Form::open(array('route' => 'newproduct.store', 'id' => 'addproduct', 'files' => true, 'class' => 'contact-form')) }}
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

            <div  class="post_box">
                {{ Form::label('categoria', 'Categoria', ['class' => 'label-input']) }}
                {{Form::select('categoria', ['categoria' => 'calcio', 'categoria' => 'pallavolo', 'categoria' => 'basket'])}}
                
            </div>

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

            <div  class="post_box">
                {{ Form::label('discounted', 'In Sconto', ['class' => 'label-input']) }}
                {{ Form::select('discounted', ['1' => 'Si', '0' => 'No'], 1, ['class' => 'input','id' => 'discounted']) }}
            </div>

            <div  class="post_box">
                {{ Form::label('descrizione', 'Descrizione Estesa', ['class' => 'label-input']) }}
                {{ Form::textarea('descrizione', '', ['class' => 'input', 'id' => 'descLong', 'rows' => 2]) }}
                @if ($errors->first('descLong'))
                <ul class="errors">
                    @foreach ($errors->get('descLong') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
  
            
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
              
             <div  class="post_box">
                {{ Form::label('regione', 'Regione', ['class' => 'label-input']) }}
                {{ Form::text('regione', '', ['class' => 'input']) }}
                @if ($errors->first('regione'))
                <ul class="errors">
                    @foreach ($errors->get('regione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
                
            </div>
            <div  class="post_box">
                {{ Form::label('raggiungere', 'Inserisci la tag html del luogo dell evento', ['class' => 'label-input']) }}
                {{ Form::textarea('raggiungere', 'In macchina: ', ['class' => 'input', 'id' => 'descLong', 'rows' => 2]) }}
                @if ($errors->first('raggiungere'))
                <ul class="errors">
                    @foreach ($errors->get('raggiungere') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div class="post_box">                
                {{ Form::submit('Aggiungi Evento', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>
