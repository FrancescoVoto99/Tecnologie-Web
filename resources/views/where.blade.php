@extends('layouts.public')

@section('title', 'Dove Siamo')

@section('content')
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