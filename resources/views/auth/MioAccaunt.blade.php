@extends('layouts.public')

@section('title', 'Mio Accaunt')

@section('content')
<div id="tooplate_sidebar">
    <div class="sb_box">
                    <h2><b>SOCIAL</b></h2>
                    <a href="https://it-it.facebook.com/"><img src="../images/facebook-32x32.png" title="facebook" alt="facebook" /></a>
                <a href="https://twitter.com/"><img src="../images/twitter-32x32.png" title="twitter" alt="twitter" /></a>
                <a href="https://www.youtube.com/"><img src="../images/youtube-32x32.png" title="youtube" alt="youtube" /></a>
            </div>
</div>
<div id="tooplate_wrapper">
    <div id="tooplate_content">
        <link rel="stylesheet" type="text/css" href="{{asset('css/interfaccia_login.css')}}" />
    <h1><center>Il mio account</center></h1>
  
            {{ Form::open(array('route' => 'mioaccaunt.edit', 'class' => 'contact-form')) }}

            <div  class="post_box">
                {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name',  Auth::user()->name, ['class' => 'input', 'id' => 'name']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="post_box">
                {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('surname',  Auth::user()->surname , ['class' => 'input', 'id' => 'surname']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="post_box">
                {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                {{ Form::text('email', Auth::user()->email , ['class' => 'input','id' => 'email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="post_box">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', Auth::user()->username , ['class' => 'input','id' => 'username']) }}
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

            <div  class="post_box">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
            </div>
            
            <div  class="post_box" style="display: none">
                {{ Form::text('societa', 'ciao', ['class' => 'input','id' => 'username']) }}
                
            </div>
            <div  class="post_box" style="display: none">
                {{ Form::text('role', Auth::user()->role, ['class' => 'input','id' => 'username']) }}
                
            </div>
            
            <div class="button">                
                {{ Form::submit('Modifica', ['class' => 'butcton']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>


@endsection
