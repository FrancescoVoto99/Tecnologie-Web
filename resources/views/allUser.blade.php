@extends('layouts.public')

@section('title','Utenti')


@section('content')


<div id="tooplate_sidebar">
    <div class="sb_box">
         
        
    </div>
</div>    

<div id="tooplate_content">
    @isset($users)
    <h1 style="text-align: center"><b>UTENTI</b></h1> 
    
    @foreach ($users as $user)
    
    <fieldset id="showuser" >
        <br>
        <center><h2><b>{{ $user->name }} {{ $user->surname }}</b></h2></center>
    
    <h3>Username:{{ $user->username}}<h3>
            
    <h3>Email:{{ $user->email}}<h3>
            
            <center><form action="{{route('deleteuser', [$user->id] )}}"> 
        <input type="submit" value="Elimina" class="butcton"> 
                </form></center></fieldset>
            
           
    <div class="cleaner h20"></div>
    <br class="cleaner" />


    @endforeach
    <!--Paginazione-->
    @include('pagination.paginator', ['paginator' => $users])
    @endisset()
</div>



<!-- end of main -->

@endsection