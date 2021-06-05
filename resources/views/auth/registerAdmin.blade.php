@extends('layouts.public')

@section('title', 'Registrazione')

@section('scripts')

@parent
<script src="{{ asset('js/functions.js') }}" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(function () {
    var actionUrl = "{{ route('newadmin.store') }}";
    var formId = 'addadmin';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        if(formElementId!='password') 
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addadmin").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>

@endsection

@section('content')
<div id="tooplate_wrapper">
    <div id="tooplate_content">
        <link rel="stylesheet" type="text/css" href="{{asset('css/interfaccia_login.css')}}" />
    <h1><center>Registra Organizzatore</center></h1>
  
            {{ Form::open(array('route' => 'newadmin.store','id' => 'addadmin', 'class' => 'contact-form')) }}

            <div  class="post_box">
                {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                
            </div>

            <div  class="post_box">
                {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname']) }}
                
            </div>
            
             <div  class="post_box">
                {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}
                
            </div>
            
             <div  class="post_box">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                
            </div>
            
            <div  class="post_box">
                {{ Form::label('societa', 'Nome Società', ['class' => 'label-input']) }}
                {{ Form::text('societa', '', ['class' => 'input','id' => 'societa']) }}
                
            </div>

             <div  class="post_box">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                
            </div>

            <div  class="post_box">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
            </div>
            
            <div  class="post_box" style="display: none">
                {{ Form::text('role', 'admin', ['class' => 'input','id' => 'role']) }}
                
            </div>
            
            
            <div class="button">                
                {{ Form::submit('Registra', ['class' => 'butcton']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>


@endsection
