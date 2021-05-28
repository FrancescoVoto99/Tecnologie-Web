@extends('layouts.public')

@section('title','Home')

@section('content')


<div id="tooplate_main">
        <div id="tooplate_content">
            @can('isAmm')
            <form action="{{route('newfaq')}}"> 
        <input type="submit" value="Inserisci FAQ"> 
    </form>
    <br>
   
    @endcan
            @isset($faqs)
            @foreach ($faqs as $faq)
            
                <h3 name="{{ $faq->id }}"> {{ $faq->domande }}</h3>
            <p name="{{ $faq->id }}" > {{ $faq->risposte }}</p>
            <br>
            @can('isAmm')
            <form action="{{route('deletefaq', [$faq->id] )}}"> 
        <input type="submit" value="Elimina"> 
    </form>
    <br>
    <form action="{{route('editfaq', [$faq->id] )}}"> 
        <input type="submit" value="Modifica"> 
    </form>
    @endcan
            <br class="cleaner" />
            

            <hr> </hr>
            @endforeach
            
            
                     
            @endisset()
        </div>
        </div>

      
     <!-- end of main -->
    
@endsection