# jQuery

[Cours jQuery](https://sutterlity.gitbooks.io/apprendre-jquery/content/presentation_de_jquery.html)

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

## Sélectionner un élément
```
let $liens = $("p .lien");
let $lien1 = $("p .lien:first");
let $lien3 = $("p .lien:eq(2)");
```

## Définition de propriétés CSS
```
console.log($("#para").css("color"));

// Définition de propriété CSS
$("#para").css({
    color: "red",
    fontSize: "20px"
    // La propriété "float" doit être mise entre guillemets, c'est un mot clé en javascript.
});
```

## Evénements
```
// Evénements souris
$("#lien1").click(function() {
    alert("Vous avez cliqué sur le premier lien !");
})

/* Les événements souris : click, dblclick, hover, mouseenter, mouseleave, mousedown, mouseup, scroll. */


// Evénements clavier
$(document).keypress(function(touche) {   // on écoute l'évènement keypress()

    let appui = touche.which || touche.keyCode; // le code est compatible tous navigateurs grâce à ces deux propriétés

    if (appui == 13) {  // Si le code de la touche est égal à 13 (Entrée)
        alert("Vous avez appuyé sur Entrée !");
    }
})
    
/* Les événements clavier : keypress, keyup, keydown. */


// Evénements formulaires
$("input").focus(function() {
    alert("Vous avez le focus !");
})

/* Les événements formulaires : focus, select, change, submit. */

$('button').trigger('click.nom'); // exécute le clic, MAIS ne lance que la première alerte !


// Supprimer un événement
$('p').on('click', function () {
    // du code ici
});

$('p').off('click'); // supprime tous les gestionnaires écoutant le clic

$('p').off(); // supprimer tous les gestionnaires de n'importe quel évènement


// Annuler la délégation
$('body').on('click', 'p', function () {
    // du code ici
});

$('body').off('click', 'p'); // supprime tous les gestionnaires d'évènements délégués sur les paragraphes

$('body').off('click', '**'); // supprime tous les gestionnaires d'évènements délégués
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