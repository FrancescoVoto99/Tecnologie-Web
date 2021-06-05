@extends('layouts.public')

@section('title','Home')

@section('content')
<div id="tooplate_sidebar">
    <div class="sb_box">
                    <h2><b>SOCIAL</b></h2>
                    <a href="https://it-it.facebook.com/"><img src="images/facebook-32x32.png" title="facebook" alt="facebook" /></a>
                <a href="https://twitter.com/"><img src="images/twitter-32x32.png" title="twitter" alt="twitter" /></a>
                <a href="https://www.youtube.com/"><img src="images/youtube-32x32.png" title="youtube" alt="youtube" /></a>
            </div>
</div>


<div id="tooplate_main">
        <div id="tooplate_content">
            <center><h1>FAQ</h1></center>
            @can('isAmm')
            
            <form  action="{{route('newfaq')}}"> 
                <center><input class="butcton" type="submit" value="Inserisci FAQ"></center>
    </form>
            
    <br>
    <br>
    @endcan
            @isset($faqs)
            @foreach ($faqs as $faq)
            <fieldset>
                <h4 name="{{ $faq->id }}"> {{ $faq->domande }}</h4>
            <p name="{{ $faq->id }}" > {{ $faq->risposte }}</p>
            <br>
            @can('isAmm')
            
            <form action="{{route('deletefaq', [$faq->id] )}}"> 
        <center><input class="butcton" type="submit" value="Elimina"> 
    </form>
    <br>
    <form action="{{route('editfaq', [$faq->id] )}}"> 
        <input class="butcton" type="submit" value="Modifica"></center>
                </fieldset>
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