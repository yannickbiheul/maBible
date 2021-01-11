# PHP - SQL

## Connexion à une base de données
Connexion en local, avec une base de données appelée "login", qui contient une table "user".

Créer un fichier, par exemple "connect.php".

Insérer ce try/catch :
```
<?php
    // Connexion à la base de données
    try {
        $connexion = new PDO("mysql:host=localhost; dbname=login", "root", "");
    } catch (PDOException $e) {
        echo "Problème à la connexion : " . $e->getMessage();
    }
?>
```
Insérer ensuite ce fichier au début de tous ceux qui utilisent la même base de données :
```
<?php

    require_once("connect.php");

?>
```

## Entrer des données dans une table
#### Formulaire HTML vers "inscription.php"
```
<form method="POST" action="inscription.php">
        <h2>Inscription</h2>
        <label for="name" class="prenom">Prénom</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password">
        <input type="submit" class="submit">
</form>
```

#### Page PHP (inscription.php)
```
<?php

    // Vérification de l'entrée des données
    if ((isset($_POST['name'])) && (isset($_POST['email'])) && (isset($_POST['password']))) {

        // Enregistrement des données dans des variables
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Cryptage du mot de passe
        $password_encrypted = password_hash($password, PASSWORD_BCRYPT);

        // Enregistrement des données dans la base, table "user"
        $sql = "INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . $password_encrypted . "');";
        $connexion->query($sql);

    }
?>
```

## Parcourir une table dans un tableau HTML
```
<?php

        // Insertion d'une commande SQL dans une variable $sql

        $sql = "SELECT * FROM user";

        // Avec le $connexion de connect.php, enregistrer la requête dans la variable $users

        $users = $connexion->query($sql);

        // fetchALL() retourne un tableau contenant toutes les lignes récupérées dans $users (id, name, email, password)

        $tableauUsers = $users->fetchALL();

        // On créé un tableau HTML
        echo "<table border=1>";

        // On parcourt le tableau $tableauUsers avec un foreach
        foreach ($tableauUsers as $value) {
            // Ici, on insère chacune de ces valeurs dans une ligne de tableau HTML
            echo "<tr><td> " . $value['name'] . " </td><td> " . $value['email'] . " </td></tr>";
        }

        // On ferme le tableau HTML
        echo "</table>";

    ?>
```

## Utiliser une base de données pour connecter un utilisateur
```
<form method="POST" action="">
    <h2>Connexion</h2>
    <label for="emailC">Email</label>
    <input type="email" name="emailC">
    <label for="passwordC">Mot de passe</label>
    <input type="password" name="passwordC">
    <input type="submit" class="submit">
    <?php
            
        // Vérification de l'entrée des données
        if ((isset($_POST['emailC'])) && (isset($_POST['passwordC']))) {

            // Enregistrement des données dans des variables
            $emailC = $_POST['emailC'];
            $passwordC = $_POST['passwordC'];

            // Sélection de la colonne correspondante
            $sql = "SELECT * FROM user WHERE email = '" . $emailC . "'";
            $user = $connexion->query($sql);
            $ligneUser = $user->fetch();
            $password_crypted = $ligneUser["password"];
                
            // Vérification concordance mots de passe
            if (password_verify($passwordC, $ligneUser["password"])) {
                echo "<p class='succes'>Excellent " . $ligneUser['name'] . ", vous êtes connecté ! </p>";
            } else {
                echo "<p class='erreur'>Mot de passe incorrect</p>";
            }
        }
    ?>
</form>
```

## Importer un fichier .csv dans une base de données

```
<?php

    // Connexion à la base de données
    try {
        $connex = new PDO("mysql:host=localhost; dbname=essai_import", "root", "");
    } catch (PDOException $e) {
        echo "Problème à la connexion : " . $e->getMessage();
    }

    // Fonction printEcho
    function printEcho($variable) {
        echo "<pre>";
        print_r($variable);
        echo "</pre>";
    }

    // Création d'une fonction pour lire le fichier .csv
    function read($csv) {

        /* fopen() ouvre un fichier ou une URL
        'r' ouvre en lecture seule, et place le pointeur de fichier au début du fichier. */
        $file = fopen($csv, 'r');

        /* feof() teste la fin du fichier.
        Retourne TRUE si le pointeur handle est à la fin du fichier ou si une erreur survient, sinon, retourne FALSE. */
        while (!feof($file)) {

            // fgetcsv() obtient une ligne depuis un pointeur de fichier et l'analyse pour des champs CSV.
            $line[] = fgetcsv($file, 1024, ";");
        }

        // fclose() ferme le fichier.
        fclose($file);
        // On retourne la variable $line.
        return $line;
        
    }

    // On place le chemin d'accès du fichier dans la variable $csv.
    $csv = "myfile.csv";

    // On appelle la fonction read() sur la variable $csv.
    $csv = read($csv);

    // On parcourt le tableau $csv pour entrer les données dans la base
    for ($i = 0; $i < sizeof($csv); $i++) {
        $sql = "INSERT INTO csv (id, nom, chiffre, nombre) VALUES ('" . $csv[$i][0] . "', '" . $csv[$i][1] . "', '" . $csv[$i][2] . "', '" . $csv[$i][3] . "')";
        $connex->query($sql);
    }

?>
```
