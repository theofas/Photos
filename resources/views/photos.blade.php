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
    <h1>Mon album photo VACANCES</h1>
    <h3>" Collecter facilement et rapidement vos plus beaux souvenirs de vacances chez nous, et transformez-les en moments inoubliables à partager "</h3>
</div>


    @foreach ($phototags as $tag)


        <img class="photos" height="300px" src="{{$tag -> url}}" alt="">

    @endforeach


<script>
  document.addEventListener("DOMContentLoaded", () => {
    // Sélectionnez toutes les images avec la classe "photos"
    const photos = document.querySelectorAll(".photos");

    // Ajoutez un EventListener à chaque image
    photos.forEach(photo => {
        photo.addEventListener("click", () => {
            // Vérifiez si l'image est déjà agrandie
            if (photo.classList.contains("scaled")) {
                // Réduisez l'image si elle est déjà agrandie
                resetImage(photo);
            } else {
                // Agrandissez l'image si elle n'est pas encore agrandie
                openImageInNewPage(photo);
            }
        });
    });

    function resetImage(photo) {
        photo.style.transform = "scale(1)";
        photo.style.position = "";
        photo.style.top = "";
        photo.style.left = "";
        photo.style.zIndex = "";
        photo.style.transition = "transform 0.3s ease";
        photo.classList.remove("scaled");
    }
function openImageInNewPage(photo) {
        // Créer une page de fond
        const overlay = document.createElement("div");
        overlay.style.position = "fixed";
        overlay.style.top = "0";
        overlay.style.left = "0";
        overlay.style.width = "100vw";
        overlay.style.height = "100vh";
        overlay.style.backgroundColor = "rgba(0, 0, 0, 0.8)";
        overlay.style.display = "flex";
        overlay.style.justifyContent = "center";
        overlay.style.alignItems = "center";
        overlay.style.zIndex = "1000";

        // Créer une copie de l'image
        const enlargedPhoto = photo.cloneNode(true);
        enlargedPhoto.style.transform = "scale(1.5)";
        enlargedPhoto.style.transition = "transform 0.3s ease";
        enlargedPhoto.style.position = "relative";
        enlargedPhoto.style.zIndex = "1001";

        // Ajoutez une croix de fermeture
        const closeButton = document.createElement("div");
        closeButton.textContent = "✖";
        closeButton.style.position = "absolute";
        closeButton.style.top = "20px";
        closeButton.style.right = "20px";
        closeButton.style.fontSize = "24px";
        closeButton.style.color = "white";
        closeButton.style.cursor = "pointer";
        closeButton.style.zIndex = "1002";

        closeButton.addEventListener("click", () => {
            overlay.remove();
        });

        // Ajouter l'image et la croix à la page de fond
        overlay.appendChild(enlargedPhoto);
        overlay.appendChild(closeButton);

        // Ajouter la page de fond au body
        document.body.appendChild(overlay);
    }
});
</script>