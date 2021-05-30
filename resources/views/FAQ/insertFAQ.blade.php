@extends('layouts.public')

@section('title', 'Area Admin')
@section('content')
<div class="tooplate_wrapper">
   
    <div class="tooplate_content" id="tooplate_content">
        
        <div  class="post_box">
            <h1><center>INSERISCI FAQ</center></h1>
    
            </div>
         
        <br>
            {{ Form::open(array('route' => 'newfaq.store', 'class' => 'contact-form')) }}
          
            
            <fieldset >

            <div  class="post_box">
                <h3>{{ Form::label('domande', 'Inserisci la Domanda:', ['class' => 'label-input']) }}</h3>
                <br>
                <center>{{ Form::textarea('domande','', ['class' => 'input']) }}</center>
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
                <h3>{{ Form::label('risposte', 'Inserisci Risposta:', ['class' => 'label-input']) }}</h3>
                <br>
                <center>{{ Form::textarea('risposte', '', ['class' => 'input']) }}</center>
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