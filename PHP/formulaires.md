# Formulaires

## Méthode GET
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

## Méthode POST
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

## Exercice formulaire questions réponses
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