<link href="{{  asset('/css/style.css')  }}" rel="stylesheet" />


<nav>
    <a href="{{route('accueil')}}">Accueil</a>
    <a href="{{route('albums')}}">Album</a>
    <form method="GET" action="#">
    <input type="text" name="search" placeholder="rechercher">
    <input type="submit">
    </form>
   
    <a href="">Login</a>
</nav>

<div class="header">
    <h1>Mon album photo VACANCES</h1>
    <h3>" Collecter facilement et rapidement vos plus beaux souvenirs de vacances chez nous, et transformez-les en moments inoubliables à partager "</h3>
</div>


@foreach ($phototags as $tag)


    <img height="300px" src="{{$tag -> url}}" alt="">

@endforeach