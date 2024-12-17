<link href="{{  asset('/css/style.css')  }}" rel="stylesheet" />


<nav>
    <a href="{{route('accueil')}}">Accueil</a>
    <a href="{{route('albums')}}">Album</a>
    <form class="search" method="GET" action="#">
    <input class="search1" type="text" name="search" placeholder="rechercher">
    <input class="search2" type="submit">
    </form>
    <a href="{{route('ajout')}}">Ajouter</a>
</nav>

<div class="header">
    <h1>Ajouter des photos</h1>
    <h3>" Collecter facilement et rapidement vos plus beaux souvenirs de vacances chez nous, et transformez-les en moments inoubliables à partager "</h3>
</div>




<form action="{{route('storephotos')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="titre" value="titre">
    
    <label for="photo">Choisir des photos :</label>
        <input type="file" name="url" id="photo" accept="image/*" multiple required>
    <input type="text" name="albumid" value="0">
    <input type="submit" value="ajouter photos">
</form>