@extends('layouts.public')

@section('title', 'Area Admin')
@section('content')
<div class="tooplate_wrapper">
   @isset($faq)
    <div class="tooplate_content" id="tooplate_content">
        
        <h1><center>Modifica FAQ</center></h1>
        <br>
            {{ Form::open(array('route' => 'editfaq.store', 'class' => 'contact-form')) }}
            <div class="post_box">
            <div style="display:none;">
                       {{ Form::text('id',$faq->id, ['class' => 'input',]) }}
                   </div>
            
            <fieldset>

            <div  class="post_box">
                <h3>{{ Form::label('domande', 'Domanda:', ['class' => 'label-input']) }}</h3>
                <br>
                <center>{{ Form::textarea('domande', $faq->domande, ['class' => 'input']) }}</center>
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
                <h3>{{ Form::label('risposte', 'Risposta:', ['class' => 'label-input']) }}</h3>
                <br>
                <center>{{ Form::textarea('risposte', $faq->risposte, ['class' => 'input']) }}</center>
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
    </div>
    @endisset
</div>
@endsection