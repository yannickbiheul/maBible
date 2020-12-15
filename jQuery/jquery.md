# jQuery

## Fonction générique
Fonction à utiliser dès le départ pour indiquer que c'est du jquery
```
jQuery(document).ready(function(){
    // Du code en jQuery va pouvoir être tapé ici !
});
```
La même fonction, minifiée
```
$(function(){
   // Du code en jQuery va pouvoir être tapé ici !
});
```

## Ajouter et supprimer une classe
Exemple avec trois boutons et une div
```
<button class="un">Vert</button>
<button class="deux">Rouge</button>
<button class="trois">Normal</button>
<div class="laClasse rouge">La classe à Daoulas</div>
```
"removeClass" et "addClass"
```
$(".laClasse").removeClass("rouge");

$(".laClasse").addClass("rouge");

$(".laClasse").removeClass("rouge");

$(".un").click(function() {
    $(".laClasse").removeClass("rouge");
    $(".laClasse").addClass("vert");
})

$(".deux").click(function () {
    $(".laClasse").removeClass("vert");
    $(".laClasse").addClass("rouge");
})

$(".trois").click(function () {
    $(".laClasse").removeClass("vert");
    $(".laClasse").addClass("rouge");
})
```

## Data binding

Exemple avec une div "affiche" et un input "tape".
```
<div id="affiche"></div>
    <input id="tape">
```
Le Data binding récupère en direct les données entrées dans un input.
```
$("#tape").keyup(function(event) {
    var deja = $("#affiche").text();
    console.log("deja : " + deja);
    console.log(event.key);
    $("#affiche").text(deja+event.key);
})
```