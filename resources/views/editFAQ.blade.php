@extends('layouts.public')

@section('title', 'Area Admin')
@section('content')
<div class="tooplate_wrapper">
   @isset($faq)
    <div class="tooplate_content" id="tooplate_content">
        <link rel="stylesheet" type="text/css" href="{{asset('css/interfaccia_login.css')}}" />
        <div  class="post_box">
            <h1>Modifica FAQ</h1>
    <p>Utilizza questa form per modificare la FAQ</p>
            </div>
         
        <br>
            {{ Form::open(array('route' => 'editfaq.store', 'class' => 'contact-form')) }}
          
            <div style="display:none;">
                       {{ Form::text('id',$faq->id, ['class' => 'input',]) }}
                   </div>
            
            <fieldset >

            <div  class="post_box">
                {{ Form::label('domande', 'Inserisci la Domanda:', ['class' => 'label-input']) }}
                {{ Form::textarea('domande', $faq->domande, ['class' => 'input']) }}
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
                {{ Form::textarea('risposte', $faq->risposte, ['class' => 'input']) }}
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
                {{ Form::submit('Modifica', ['class' => 'form-btn1']) }}
            </div>
            {{ Form::close() }}
        </div>
    @endisset
    </div>
@endsection