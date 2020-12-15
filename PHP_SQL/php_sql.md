# PHP - SQL

## Connexion à une base de données
Connexion en local, avec une base de données appelée "login".

Créer un fichier, exemple "connect.php".

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
### Formulaire HTML vers "inscription.php"
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

### Page PHP (inscription.php)
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
