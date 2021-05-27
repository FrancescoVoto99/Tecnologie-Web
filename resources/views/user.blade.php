@extends('layouts.public')

@section('title', 'Area User')

@section('content')
<div id="tooplate_content">
    <h3>Area Utente</h3>
    <p>Benvenuto <b>{{ Auth::user()->name }} {{ Auth::user()->surname }}</b></p>
    <p>Seleziona la funzione da attivare</p>
</div>
@endsection


