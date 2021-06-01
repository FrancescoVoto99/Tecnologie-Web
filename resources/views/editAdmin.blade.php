@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<div id="tooplate_wrapper">
    @isset($user)
    <div id="tooplate_content">
        <link rel="stylesheet" type="text/css" href="{{asset('css/interfaccia_login.css')}}" />
    <h1><center>Modifica</center></h1>

    
            {{ Form::open(array('route' => ['editadmin.store','id_admin'=>$user->id], 'class' => 'contact-form')) }}

            <div  class="post_box">
                {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                {{ Form::text('usernane', $user->username , ['class' => 'input', 'readonly', 'id' => 'readonly' ]) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                
            </div>

            
            <div  class="post_box">
                {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name', $user->name , ['class' => 'input', 'id' => 'name']) }}
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
                {{ Form::text('surname', $user->surname, ['class' => 'input', 'id' => 'surname']) }}
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
                {{ Form::text('email', $user->email, ['class' => 'input','id' => 'email', 'readonly', 'id' => 'readonly']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="post_box">
                {{ Form::label('societa', 'Nome Società', ['class' => 'label-input']) }}
                {{ Form::text('societa',$user->societa, ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('societa'))
                <ul class="errors">
                    @foreach ($errors->get('societa') as $message)
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
            
            
            
            
            <div class="button">                
                {{ Form::submit('Modifica', ['class' => 'butcton']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    @endisset($user)
    </div>


@endsection
