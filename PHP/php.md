# PHP

## Executer PHP avec XAMPP

Installer Xampp;

Création fichier "index.php" dans le dossier "htdocs" de xampp;

Changement de port dans "Xampp Control Panel", "Apache => Config",  "Apache (httpd.conf)";

Trouver la ligne "Listen 80";

Changer "Listen 80" en "Listen 8090" pour éviter les conflits (avec Skype par exemple), et enregistrer.

Sur le navigateur, taper l'adresse "localhost:8090" pour afficher le fichier.

## Tableaux
```
<?php

    echo "<h1>Tableau !!!</h1>";
    $tableau = array("un", "deux", "trois", "quatre");
    var_dump($tableau);

    $tableau2 = array(
        "un" => "motUn",
        "deux" => 2,
        "trois" => "motTrois",
        "quatre" => 45.6,
        "Server" => $_SERVER['SERVER_NAME']
    );

    echo "<pre>";
    var_dump($tableau2);
    echo "</pre>";

    echo "<p>$tableau[0]</p>";

?>
```
$_SERVER permet d'accéder aux "méthodes" du serveur.

## Formulaires
### Méthode GET
> HTML
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

    <h1>Un formulaire</h1>

    <p>Ce formulaire sera soumis en utilisant la méthode GET</p>

    <form action="test2.php" target="_blank" method="GET">
        <label for="fname">Prénom : </label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Nom : </label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>
```
> PHP
```
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Essai PHP</title>
</head>
<body>

<?php

    echo "<h1>Récupération de données de formulaire</h1>";
    echo "Bonjour " . htmlspecialchars($_GET['fname']) . " " . htmlspecialchars($_GET['lname']) . " ! ";

?>

</body>
</html>
```
Les valeurs du formulaire se retrouvent dans la barre d'adresse.

### Méthode POST
> HTML
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

    <h1>Un formulaire</h1>

    <p>Ce formulaire sera soumis en utilisant la méthode GET</p>

    <form action="test2.php" target="_blank" method="POST">
        <label for="fname">Prénom : </label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Nom : </label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>
```
> PHP
```
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Essai PHP</title>
</head>
<body>

<?php

    echo "<h1>Récupération de données de formulaire</h1>";
    echo "Bonjour " . htmlspecialchars($_POST['fname']) . " " . htmlspecialchars($_POST['lname']) . " ! ";

?>

</body>
</html>
```
"htmlspecialchars" permet d'éviter les conneries des utilisateurs.

$_POST['fname'] permet de récupérer le "fname" donné dans le formulaire.

### Exercice formulaire questions réponses
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        p {
            display: inline;
        }
    </style>
</head>
<body>

<?php

$question[0] = "Quelle est la couleur du cheval blanc d'Henri IV ?";
$question[1] = "Quel est le jour de repos ?";
$question[2] = "Quelle est la saison la plus chaude ?";

$bonne_rep[0] = "blanc";
$bonne_rep[1] = "dimanche";
$bonne_rep[2] = "été";

$vide = "";
$mauvais = "Mauvaise réponse";
$bon = "Exact";

?>

    <form action="" method="POST">
        <label for="q1">1°) <?php echo $question[0] ?></label><br>
        <input type="text" id="q1" name="q1">
        <?php 
            if (!isset($_POST['q1'])) {
                echo "<p>$vide</p>";
            } else if ($_POST['q1'] == $bonne_rep[0]) {
                echo "<p>$bon</p>";
            } else {
                echo "<p>$mauvais</p>";
            }
        ?><br>
        <label for="q2">2°) <?php echo $question[1] ?></label><br>
        <input type="text" id="q2" name="q2"><?php 
            if (!isset($_POST['q2'])) {
                echo "<p>$vide</p>";
            } else if ($_POST['q2'] == $bonne_rep[1]) {
                echo "<p>$bon</p>";
            } else {
                echo "<p>$mauvais</p>";
            }
        ?><br>
        <label for="q3">3°) <?php echo $question[2] ?></label><br>
        <input type="text" id="q3" name="q3"><?php 
            if (!isset($_POST['q3'])) {
                echo "<p>$vide</p>";
            } else if ($_POST['q3'] == $bonne_rep[2]) {
                echo "<p>$bon</p>";
            } else {
                echo "<p>$mauvais</p>";
            }
        ?><br>
        <input type="submit" value="OK !">
    </form>



</body>
</html>
```
isset($_GET['nom']) pour tester si un input est rempli.

!empty($_GET['nom']) pour vérifier qu'il n'est pas vide.

## Lire un fichier
```
<?php

    $fcontents = file("coucou.txt");
    var_dump($fcontents);
    foreach ($fcontents as $line_num => $line) {
        echo "<br>", $line, "<br>";
    }

?>
```

## Parcourir un tableau de mails et l'afficher dans un tableau HTML
```
<?php

    $email = array (
        "toto" => "toto@univ-lille3.fr",
        "titi" => "titi@wanadoo.fr",
        "tata" => "tata@pareilquetiti.fr",
        "tutu" => "tutu@nulpart.com"
    );

    function LigneMail($id,$ad) {
        echo "<tr>\n";
        echo "<th>$id</th>\n";
        echo "<td><a href='mailto:$ad'>$ad</a></td>\n";
        echo "</tr>\n";
    }

    echo "<TABLE BORDER=1>\n";
    foreach ($email as $nom=>$mail) {
        LigneMail($nom,$mail);
    }
    echo "</TABLE>\n";

?>
```

## Objet en PHP
```
<?php

    $data = '{
        "name": "Alex",
        "age": "25",
        "address": "Paris",
        "emails": [ "eee@zzz.com", "rr@ee" ]
    }';

    $obj = json_decode($data);
    // var_dump($obj);
    echo gettype($obj);
    echo "<br>";
    echo $obj->name . "<br>";
    echo $obj->age . "<br>";
    echo $obj->emails[0] . "<br>";
    echo $obj->emails[1] . "<br>";
    echo sizeof($obj->emails);

?>
```

### Récupérer des données depuis un fichier json
```
<?php
$Json = file_get_contents("fichier.json");
// Converts to an array 
$myarray = json_decode($Json, true);
var_dump($myarray); // prints array
?>
```

## Trier des tableaux
```
<?php

    function dbg($x) {
        echo "<pre>";
        print_r($x);
        echo "</pre>";
    }

    $langages = ["c" =>"Java", "b"=>"PHP", "a"=>"SmallTalk"];
    $systemes = ["w" =>"windows", "x"=>"linux"];

    // Trier le tableau dans l'ordre par clés
    ksort($langages);
    print_r($langages);
    echo "<br>";
    // Trier le tableau dans l'ordre par valeurs
    asort($langages);
    print_r($langages);

    // Affiche les tableaux en propre
    dbg($langages);

    // Affiche les clés
    dbg(array_keys($langages));
    // Affiche les valeurs
    dbg(array_values($langages));

    // Supprimer une variable
    unset($langages['a']);
    print_r($langages);

    echo "<br>";

        // Caster une variable
    $nbr = "5.21";
    echo "<br>";
    echo gettype($nbr);
    echo "<br>";
    $decimal = (float) $nbr;
    echo $decimal;
    echo "<br>";
    echo gettype($decimal);

    // Merger des tableaux
    dbg(array_merge($langages, $systemes));

    // Afficher la taille d'un tableau
    dbg(sizeof($langages));

    // Vérifier qu'une clé existe dans un tableau
    if (array_key_exists("w", $systemes)) {
        echo "La clé w existe !";
    } else {
        echo "La clé w n'existe pas !";
    }

?>
```