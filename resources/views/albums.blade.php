<link href="{{  asset('/css/style.css')  }}" rel="stylesheet" />


<nav>
    <a href="{{route('accueil')}}">Accueil</a>
    <a href="{{route('albums')}}">Album</a>
    <input type="text" name="recherche" placeholder="rechercher">
    <a href="">Login</a>
</nav>

<div class="header">
    <h1>Mon album photo VACANCES</h1>
    <h3>" Collecter facilement et rapidement vos plus beaux souvenirs de vacances chez nous, et transformez-les en moments inoubliables à partager "</h3>
</div>
<div class="album">
    @foreach ($album as $a)
        
            <a href="{{route("photosalbum", $a->id)}}"><div class="contenualb">{{$a -> titre}}</div></a>

    @endforeach
    </div>