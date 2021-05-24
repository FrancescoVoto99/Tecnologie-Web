<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
    <head>
        <title>SporTickets | @yield('title', 'Home')</title>
        <link href="{{asset('css/tooplate_style.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/ddsmoothmenu.css')}}" />
        
        
    </head>
    <body>
        <div id="tooplate_wrapper">
            <div id="tooplate_header">
                <div id="site_title">
                    <h1><a href="{{ route('eventi')}}">SportTikets</a></h1>
                </div>

                <div id="tooplate_menu" class="ddsmoothmenu">
                    @include('layouts/_navpublic')
                    <br style="clear: left" />
                </div> <!-- end of menu -->
            </div>
        <div id="tooplate_main">
             @yield('content')
            <div class="cleaner"></div>
            </div> 

            
             <!-- end of main -->
             
            
            
            <div id="tooplate_footer">
            <footer>
                
                <p class="footer1"><a href="{{ route('FAQ') }}">FAQ</a></p>
                <p class="footer1"><a href="{{ route('who') }}">Chi Siamo</a></p>
                <p class="footer1"><a href="{{ route('where') }}">Lavora Con Noi</a></p>
                Copyright © 2048 Company Name 
            </footer> 
            </div>
        </div> <!-- end of main -->
    </body>
</html>