# Templates PHP

## Afficher une page d'après la méthode GET()
#### index.php
```
<?php
// Demarrage de la temporisation (rien de s'affichera)
ob_start() ;

// On teste si un paramètre qui s'appelle "page" est présent dans l'URL

if(isset($_GET['page'])){
	// Si cela existe on recupere sa valeur
	$page = $_GET['page'] ;
} 
// Si le parametre n'existe pas    
else { 
	// On donne une valeur par defaut à $page
	$page = 'accueil';
}


// Switch va tester la valeur de $page et le code correspondant au "cas"
switch($page) :

	// Si $page est égal à "accueil"
	case 'accueil' :
   		// On ajoute une variable pour le tite de la page accueil
   		$title = "Site perso :: Accueil" ;
		// On integre le contenu de la page
		include 'pages/accueil.php' ;
	break;
   
   	// On ajoute le code nécessaire pour la nouvelle page 
   	// Si $page est égal à "test"
	case 'test' :
   		// On ajoute une variable pour le tite de la page test
   		$title = "Site perso :: Page de test" ;
		include 'pages/test.php' ;
	break;
  
    // Si aucun "cas" ne correspond à la valeur de $page
	default :
   		// On ajoute une variable pour le tite de la page par defaut
   		$title = "Site perso :: Accueil" ;
		// On intégrer une page par defaut...
   		// Nous  pouvons integrer la page d'accueil ou bien creer une page d'erreur specifique 
   		include 'pages/accueil.php' ; 
	break;

endswitch ;


// On recupere dans une variable le contenu du tampon 
$contenu = ob_get_clean() ;

// On intégre le template qui utilise la variable $contenu 
include 'template/template.php' ;

?>
```

#### template.php
```
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?php echo $title ; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    </head>

    <body>
        <header>
        <nav>
        
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="Test">Test</a></li>
                <li><a href="about">A propos</a></li>
            </ul>

            </nav>
            <h1>Titre du site</h1>
            <p>Less is more</p>
        </header>
        <article>
            
            <?php echo $contenu ; ?>

        </article>
        <footer>
            Designed by me
        </footer>
    </body>
</html>
```