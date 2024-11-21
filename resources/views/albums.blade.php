<nav>
    <a href="{{route("accueil")}}">Accueil</a>
    <a href="{{route("albums")}}">Albums</a>
    <input type="text" name="Recherche">
    <a href="">Login</a>

</nav>

@foreach ($album as $a)
    <a href="{{route("photosalbum", $a->id)}}">{{$a -> titre}}</a>

@endforeach