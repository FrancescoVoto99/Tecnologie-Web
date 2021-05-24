@extends('layouts.public')

@section('title','Home')

@section('content')


<div id="tooplate_main">
        <div id="tooplate_content">
            
            @isset($faqs)
            @foreach ($faqs as $faq)
            
                <h2 name="{{ $faq->id }}"> {{ $faq->domande }}</h2>
            <p name="{{ $faq->id }}" > {{ $faq->risposte }}</p>
            <br>
            

            <br class="cleaner" />
            

            <hr> </hr>
            @endforeach
                     
            @endisset()
        </div>
        </div>

      
     <!-- end of main -->
    
@endsection