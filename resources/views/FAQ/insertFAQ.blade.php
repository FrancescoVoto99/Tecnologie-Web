@extends('layouts.public')

@section('title', 'Area Admin')
@section('content')
<div class="tooplate_wrapper">
   
    <div class="tooplate_content" id="tooplate_content">
        <link rel="stylesheet" type="text/css" href="{{asset('css/interfaccia_login.css')}}" />
        <div  class="post_box">
            <h1>Inserisci FAQ</h1>
    <p>Utilizza questa form per inserire la FAQ</p>
            </div>
         
        <br>
            {{ Form::open(array('route' => 'newfaq.store', 'class' => 'contact-form')) }}
          
            
            <fieldset >

            <div  class="post_box">
                {{ Form::label('domande', 'Inserisci la Domanda:', ['class' => 'label-input']) }}
                {{ Form::textarea('domande','', ['class' => 'input']) }}
                @if ($errors->first('domande'))
                <ul class="errors">
                    @foreach ($errors->get('domande') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                </div>
            </fieldset>
            <br>
             <fieldset>
            <div  class="post_box">
                {{ Form::label('risposte', 'Inserisci Risposta:', ['class' => 'label-input']) }}
                {{ Form::textarea('risposte', '', ['class' => 'input']) }}
                @if ($errors->first('domande'))
                <ul class="errors">
                    @foreach ($errors->get('domande') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
              
            </div>
                 </fieldset>
            <br>
            <div class="post_box">                
                {{ Form::submit('Inserisci', ['class' => 'form-btn1']) }}
            </div>
            {{ Form::close() }}
        </div>
  
    </div>
@endsection