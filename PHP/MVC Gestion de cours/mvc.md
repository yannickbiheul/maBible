# Model View Controller en PHP

> Dossier DWWM_BackEnd/mvc
- Création base de données "formation" avec une table "cours"
- La table cours contient : id, code, titre et langage.

## Création d'un MVC pour ajouter des cours

- Création d'un index.php dans le dossier DWWM_BackEnd/mvc.
- Création de 3 dossiers : "models", "views" et "controllers".

Dans index.php :
```
<?php 

    echo "Requête : " . $_SERVER['QUERY_STRING'];

?>
```
Ce code vient chercher l'url de la page et nous le renvoie.

### Réécriture des URL
Créer un fichier .htaccess 
```
RewriteEngine on
RewriteRule ^etudiants$ index.php
```
'^' pour indiquer le début de l'expression, '\$' pour indiquer la fin.
```
RewriteEngine on
RewriteRule ^([A-Za-z0-9\-\_\/]*)$ index.php?action=$1
```
$1 correspond à la regex (expression régulière).

### Création d'un model
model.php pour se connecter à la base de données
```
<?php

    function connexionBDD() {
        try {
            $bdd = new PDO("mysql:host=localhost; dbname=formation", "root", "");
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bdd;
        } catch(PDOException $e) {
            echo $e;
        }
    }
    
?>
```

modelCours.php pour enregistrer les données dans la base
```
<?php

    require_once("models/model.php");

    function addCours($pcode, $ptitre, $plangage) {
        $bdd = connexionBDD();

        // Requête préparée (plus sécure)
        // Evite les attaques injection SQL
        $sql = $bdd->prepare("INSERT INTO cours (code, titre, langage) VALUES (:code, :titre, :langage)");
        $sql->bindValue(":code", $pcode, PDO::PARAM_STR);
        $sql->bindValue(":titre", $ptitre, PDO::PARAM_STR);
        $sql->bindValue(":langage", $plangage, PDO::PARAM_STR);
        // PDO_PARAM_STR en 3ème argument pas obligatoire
        echo "<p style='color:green'>Données validées !</p>";

        $result = $sql->execute();
        return $result;
    }

?>
```
- représente les données et l’état des données
- Le modèle ne contient pas de HTML
- Le modèle est en interaction avec la base de données (SQL)

### Création d'une view
Présentation des données à l’utilisateur : viewCours.php

```
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title></title>
    <!-- DESCRIPTION -->
    <meta name='description' content=''>
</head>

<body>

    <h2>viewCours</h2>
    <form action="addOneCours" method="POST">
        <input type="text" name="code" placeholder="code">
        <input type="text" name="titre" placeholder="titre">
        <input type="text" name="langage" placeholder="langage">
        <input type="submit" value="Ok">
    </form>

</body>
</html>
```
##### Affichage :
- HTML
- CSS
- JavaScript client / uniquement interactions
dans le DOM

### Création d'un controller
controllerCours.php fera le lien entre la view et le model
```
<?php

    require_once('models/modelCours.php');

    function addOneCours() {
        if (!empty($_POST['code']) && !empty($_POST['titre']) && !empty($_POST['langage'])) {
            addCours($_POST['code'], $_POST['titre'], $_POST['langage']);
        }
        require_once('views/viewCours.php');
    }

?>
```
- Assure la relation entre le modèle et la vue
- Exécute des actions pour répondre à la demande de l’utilisateur.
- Utilise le modèle pour interroger la base de données

### index.php
index.php fait office de routeur
```
<?php 

    /* ----- EXEMPLES POUR AJOUTER UN COURS ----- */
    /* ----- url : http://localhost:8090/DWWM_BackEnd/mvc/controllerCours/addOneCours ----- */

    // Affiche tout le chemin de la page
    echo "Chemin : " . $_SERVER['SCRIPT_FILENAME'];

    // Au chargement de la page, son "chemin"" est : C:/xampp/htdocs/DWWM_BackEnd/mvc/index.php
    // Dans la variable $root, on remplace 'index.php' par 'rien' dans le chemin de la page (on le supprime quoi)
    $root = str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']);
    // Le chemin devient : C:/xampp/htdocs/DWWM_BackEnd/mvc/

    // On définit $root dans une constante ROOT
    define('ROOT', $root);

    // Si une action se trouve dans l'url (ici controllerCours/addOneCours)
    if ($_GET['action']) {

        // explode() créer un tableau en utilisant le séparateur "/" de l'url
        // controllerCours/addOneCours
        // ["controllerCours", "addOneCours"]
        $params = explode("/", $_GET['action']);
        // Le tableau $params contient le controller, l'action, et  les paramètres
        // Ici on a seulement un controller (controllerCours) et une action (addOneCours)
        // $params[0] = controller
        // $params[1] = action

        // Si un controller est présent dans l'url
        if ($params[0] != "") {

            // On l'enregistre dans une variable $controller
            $controller = $params[0];
            // On créer une variable $action vide
            $action = "";

            // Si une action est présente dans l'url
            if (isset($params[1])) {
                // On l'enregistre dans la variable $action
                $action = $params[1];
            }
        }

        // On charge le fichier controller en l'insérant à la fin du chemin
        require_once(ROOT.'controllers/'.$controller.'.php');
        // Ici : C:/xampp/htdocs/DWWM_BackEnd/mvc/controllerCours.php

        // Dans le fichier controllerCours.php, on trouve la fonction addOneCours()
        // Cette fonction a le même nom que l'action de l'url, qu'on a enregistré dans la variable $action
        if (function_exists($action)) {
            if (isset($params[2]) && isset($params[3])) {
                $action($params[2], $params[3]);
            } else if (isset($params[2])) {
                $action($params[2]);
            } else {
                $action();
            }
        } else {
            echo "Page par défaut";
        }

    } else {
        echo "<h1>Bienvenue sur la page d'accueil !</h1>";
        echo "<a href='controllerCours/addOneCours'>Ajouter un cours</a>";
    }

?>
```