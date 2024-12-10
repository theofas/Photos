
<link href="{{  asset('/css/style.css')  }}" rel="stylesheet" />


<nav>
    <a href="{{route('accueil')}}">Accueil</a>
    <a href="{{route('albums')}}">Album</a>
    <form class="search" method="GET" action="#">
    <input class="search1" type="text" name="search" placeholder="rechercher">
    <input class="search2" type="submit">
    </form>
    <a href="">Login</a>
</nav>

<div class="header">
    <h1>Mon album photo VACANCES</h1>
    <h3>" Collecter facilement et rapidement vos plus beaux souvenirs de vacances chez nous, et transformez-les en moments inoubliables à partager "</h3>
</div>



<div class="cards">
    <div class="card1">
    <a href="{{route("tags", 'vacances')}}">vacances</a>
    </div>
    <div class="card2">
    <a href="{{route("tags", 'neige')}}">neiges</a>
    </div>
    <div class="card3">
    <a href="{{route("tags", 'mer')}}">mer</a>
    </div>
    <div class="card4">
    <a href="{{route("tags", 'repas')}}">repas</a>
    </div>  
</div>