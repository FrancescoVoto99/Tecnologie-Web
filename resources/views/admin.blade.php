@extends('layouts.public')

@section('title', 'Area Admin')

@section('content')
<div id="tooplate_content">
    <h3>Area Organizzatore</h3>
    <p>Benvenuto <b>{{ Auth::user()->name }} {{ Auth::user()->surname }}</b></p>
    <p>Seleziona la funzione da attivare</p>
</div>
@endsection


