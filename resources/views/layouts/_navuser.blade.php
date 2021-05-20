<ul>
    <li><a href="{{ route('eventi')}}" class="selected" title="lista eventi"> Home </a></li>
    <li><a href="" >Mio Accout</a></li>
    <li><a href="" >I miei acquisti</a></li>
    @auth
        <li><a href="" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Esci</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
</ul>