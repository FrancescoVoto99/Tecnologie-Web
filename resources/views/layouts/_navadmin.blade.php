<ul>
    <li><a href="{{ route('admin') }}" title="Va alla Home di Admin">Home</a></li>
    <li><a href="{{ route('myevents') }}" title="Visualizza i tuoi eventi">Eventi</a></li>
    <li><a href="{{ route('newevent') }}" title="Inserisce nuovi prodotti">Inserisci</a></li>
    <li><a href="{{ route('admin') }}" title="Modifica i Prodotti">Modifica</a></li>
    <li><a href="{{ route('admin') }}" title="Cancella o prodotti">Cancella</a></li>
    @auth
        <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
</ul>
   