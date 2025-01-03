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



<div class="ajouter">
  
    <form action="{{route('storephotos')}}" method="post" enctype="multipart/form-data" class="ajout">
    <h1 class="h1ajout" >Ajouter une photo dans un album</h1>
        @csrf
        <input type="text" name="titre" value="titre" class="titre_ajout">
        
        <label for="photo" class="ajout_photo">Choisir des photos :</label>
            <input class="choix_photo" type="file" name="url" id="photo" accept="image/*" multiple required>
        <input type="text" class="num_album" name="albumid" value="0" placeholder="numéro de l'album">
        <input type="submit" class="bouton_ajout" value="ajouter photos">
    </form>
</div>