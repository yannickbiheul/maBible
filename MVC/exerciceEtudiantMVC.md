# Exercice Etudiant MVC

### Model
modelEtudiant.php
```
<?php

    require_once("models/model.php");

    function addEtudiant($pcode, $pnom, $pprenom, $page) {
        $bdd = connexionBDD();

        // Requête préparée (plus sécure)
        // Evite les attaques injection SQL
        $sql = $bdd->prepare("INSERT INTO etudiants (code, nom, prenom, age) VALUES (:code, :nom, :prenom, :age)");
        $sql->bindValue(":code", $pcode, PDO::PARAM_STR);
        $sql->bindValue(":nom", $pnom, PDO::PARAM_STR);
        $sql->bindValue(":prenom", $pprenom, PDO::PARAM_STR);
        $sql->bindValue(":age", $page, PDO::PARAM_INT);
        // PDO_PARAM_STR en 3ème argument pas obligatoire
        echo "<p style='color:green'>Données validées !</p>";

        $result = $sql->execute();
        return $result;
    }

?>
```

### View
viewEtudiant.php
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

    <h2>viewEtudiant</h2>
    <form action="addOneEtudiant" method="POST">
        <input type="text" name="code" placeholder="code">
        <input type="text" name="nom" placeholder="nom">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="number" name="age" placeholder="age">
        <input type="submit" value="Ok">
    </form>

</body>
</html>
```

### Controller
controllerEtudiant.php
```
<?php

    require_once('models/modelEtudiant.php');

    function addOneEtudiant() {
        if (!empty($_POST['code']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['age'])) {
            addEtudiant($_POST['code'], $_POST['nom'], $_POST['prenom'], $_POST['age']);
        }
        require_once('views/viewEtudiant.php');
    }

?>
```

### Index
index.php
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
        echo "<br>";
        echo "<a href='controllerEtudiant/addOneEtudiant'>Ajouter un étudiant</a>";
    }

?>
```
