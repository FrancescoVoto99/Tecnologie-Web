@extends('layouts.public')

@section('title', 'Dove Siamo')

@section('content')
<div id="tooplate_sidebar">
    <div class="sb_box">
                    <h2><b>SOCIAL</b></h2>
                    <a href="https://it-it.facebook.com/"><img src="images/facebook-32x32.png" title="facebook" alt="facebook" /></a>
                <a href="https://twitter.com/"><img src="images/twitter-32x32.png" title="twitter" alt="twitter" /></a>
                <a href="https://www.youtube.com/"><img src="images/youtube-32x32.png" title="youtube" alt="youtube" /></a>
            </div>
</div>
<link rel="stylesheet" type="text/css" href="css/interfaccia_login.css" />
 <div id="tooplate_main">
     <div id="tooplate_content">
                <div class="post_box"> 
                <h1> SE VOLETE ENTRARE A FAR PARTE NELLA NOSTRA COMMUNITY CONTATTATECI :</h1>
                <br></br>
                
                <form name="formmail" method="post" action="mailto:Sporticket@gmail.com">
                <input type="submit" value="Invia Richiesta">
                </form>
                
                </div>
            
            <br></br><br></br>
        </div> <!-- end of main -->
        
        <div class="cleaner"></div>
 
    </div>

@endsection