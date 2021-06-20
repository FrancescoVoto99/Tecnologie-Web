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
    <fieldset id="showuser" >
    <center><h2><b>{{ $user->name }} {{ $user->surname }}</b></h2></center>
    <h2>Nome Società Organizzatrice: <b>{{ $user->societa}}</b></h2>
    
    <h3>Incasso Totale: <b>{{ $user->incassoTotale}} €</b></h4>
    
    <h3>Biglietti Totali Venduti: <b>{{ $user->bigliettiVenduti}}</b></h4>
    
    <h4>Username: <b>{{ $user->username}}</b></h4>
            
    <h4>Email: <b>{{ $user->email}}</b></h4>
    
    
    <div id="move_botton">
        <form action="{{route('deleteuser', [$user->id] )}}"> 
        <input type="submit" value="Elimina" class="butcton"> 
    </form>
    </div>
    
    <div>
        <form action="{{route('editadmin', [$user->id] )}}"> 
         <input type="submit" value="Modifica" class="butcton" > 
     </form>
    </div>
    
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