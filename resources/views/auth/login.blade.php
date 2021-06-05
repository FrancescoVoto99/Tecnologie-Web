@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<div id="tooplate_wrapper">
    <div id="tooplate_content">
        <link rel="stylesheet" type="text/css" href="{{asset('css/interfaccia_login.css')}}" />
        <h1><center>Accedi</center></h1>
    

            {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}
            
             
             <div  class="post_box">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="post_box">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            
            <div class="post_box">                
                {{ Form::submit('Accedi', ['class' => 'butcton']) }}
            </div>
            
            <div  class="post_box">
                 <p> Se non hai già un account <a  href="{{ route('register') }}">registrati</a></p>
             </div>
            {{ Form::close() }}
        </div>
</div>
@endsection
