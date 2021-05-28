<ul>
    <li><a href="{{ route('eventi')}}" class="selected" title="lista eventi">Home </a></li>
    
    <li><a href="{{ route('eventifilter')}}" title="ricerca gli eventi">Catalogo</a></li>
    
    
    
    @guest
        <li><a href="{{ route('login') }}" title="Accedi all'area riservata del sito">Accedi</a></li>  
    @endguest
    
    @can('isAdmin')
    @include('layouts/_navadmin')
    @endcan
    @can('isUser')
        @include('layouts/_navuser')
    @endcan
    @can('isAmm')
        @include('layouts/_navamm')
    @endcan
    @auth
        <li><a href="" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Esci</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth  
</ul>