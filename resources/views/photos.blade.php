<nav>
    <a href="{{route("accueil")}}">Accueil</a>
    <a href="{{route("albums")}}">Albums</a>
    <input type="text" name="Recherche">
    <a href="">Login</a>

</nav>



@foreach ($phototags as $tag)

    <img height="300px" src="{{$tag -> url}}" alt="">

@endforeach