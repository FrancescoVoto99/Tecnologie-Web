@extends('layouts.public')

@section('title','Utenti')


@section('content')


<div id="tooplate_sidebar">
    <div class="sb_box">
         
        
    </div>
</div>    

<div id="tooplate_content">
    @isset($users)
    <h1 style="text-align: center"><b>ORGANIZZATORI</b></h1> 
    @foreach ($users as $user)
    <fieldset >
    <center><h2><b>{{ $user->name }} {{ $user->surname }}</b></h2></center>
    <h3>Nome Società Organizzatrice: <b>{{ $user->societa}}</b></h3>
    
    <h4>Username:{{ $user->username}}</h4>
            
    <h4>Email:{{ $user->email}}</h4>
            
    <center><form action="{{route('deleteuser', [$user->id] )}}"> 
        <input type="submit" value="Elimina" class="butcton"> 
    </form>
    
     <form action="{{route('editadmin', [$user->id] )}}"> 
        <input type="submit" value="Modifica" class="butcton"> 
     </form></center>
    </fieldset>
            
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