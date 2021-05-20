<ul>
    <li><a href="{{ route('eventi')}}" class="selected" title="lista eventi">Home </a></li>
    <li><a href="{{ route('eventifilter')}}" title="ricerca gli eventi">Ricerca Eventi</a></li>
    @guest
        <li><a href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li>  
    @endguest
</ul>