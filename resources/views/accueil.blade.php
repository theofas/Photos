
<link href="{{  asset('/css/style.css')  }}" rel="stylesheet" />


<nav>
    <a href="{{route('accueil')}}">Accueil</a>
    <a href="{{route('albums')}}">Album</a>
    <input type="text" name="recherche">
    <a href="">Login</a>
</nav>


<h1>Mon Album photo VACANCES</h1>
<h3>" Collecter facilement et rapidement vos plus beaux souvenirs de vacances chez nous, et transformez-les en moments inoubliables à partager</h3>


<div class="cards">
    <div class="card1">
        <a href="{{route('tags', 'vacances')}}">vacances</a>
    </div>

    <div class="card2">
        <a href="{{route('tags', 'neige')}}">neiges</a>
    </div>

    <div class="card3">
        <a href="{{route('tags', 'mer')}}">mer</a>
    </div>

    <div class="card4">
        <a href="{{route('tags', 'repas')}}">repas</a>
    </div>
</div>