@extends('layouts.public')

@section('title','Utenti')


@section('content')


<div id="tooplate_sidebar">
    <div class="sb_box">
         
        
    </div>
</div>    

<div id="tooplate_content">
    @isset($users)
    <h1 style="text-align: center"><b>Organizzatori</b></h1> 
    @foreach ($users as $user)
    <h1>{{ $user->name }} {{ $user->surname }}</h1>
    
    <br></br>
    <h2>Nome Società Organizzatrice: <b>{{ $user->societa}}</b></h2>
    
    <h3>Username:{{ $user->username}}<h3>
            
    <h3>Email:{{ $user->email}}<h3>
            
     <form action="{{route('deleteuser', [$user->id] )}}"> 
        <input type="submit" value="Elimina" class="butcton"> 
    </form>
    
     <form action="{{route('editadmin', [$user->id] )}}"> 
        <input type="submit" value="Modifica" class="butcton"> 
    </form>
            
    <br></br>
    <br>
    <div class="cleaner h20"></div>
    <br class="cleaner" />


    <hr> </hr>
    @endforeach
    <!--Paginazione-->
    
    @endisset()
</div>



<!-- end of main -->

@endsection