# Exercice inscription / connexion

## connect.php
Pour se connecter à la base de données "login", et utiliser la fonction monPrint().
```
<?php
    // Connexion à la base de données
        try {
            $connexion = new PDO("mysql:host=localhost; dbname=login", "root", "");
        } catch (PDOException $e) {
            echo "Problème à la connexion : " . $e->getMessage();
        }

        function monPrint($var) {
            echo "<pre>";
            print_r($var);
            echo "</pre>";
        }
?>
```

## accueil.php
Permet d'accéder à inscription, connexion, liste et déconnexion
```
<?php

    session_start();
    require_once("connect.php");

?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Accueil</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Un essai de login'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
</head>

<body>

    <div class="accueil">
        <h1> 
            <?php 
                if(isset($_SESSION['name'])) {
                    echo "Salut, " . $_SESSION['name'] . " !";
                } else {
                    echo "Bonjour, inconnu";
                }
            ?>
        </h1>
        <a href="inscription.php">Inscription</a>
        <a href="connexion.php">Connexion</a>
        <a href="liste.php">Liste</a>
        <a href="deco.php">Déconnexion</a>
    </div>

</body>
</html>
```
Utilisation de session_start() pour retenir le nom du visiteur $_SESSION['name'].

## inscription.php
Enregistre les données dans la base "login" et crypte le mot de passe.
```
<?php

    session_start();
    require_once("connect.php");

?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Inscription / Connexion</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Un essai de login'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
</head>

<body>

    <!-- INSCRIPTION -->

    <div class='liste'>

    <?php 
        if(isset($_SESSION['name'])) {
            echo "<h3 style='margin-bottom: 40px;'>Mais " . $_SESSION['name'] . ", tu es déjà inscrit !</h3>";
        } else {
            echo "<h3 style='margin-bottom: 40px;'>Inconnu, vous pouvez vous inscrire ici.</h3>";
        }
    ?>

    <form method="POST" action="">
        <h2>Inscription</h2>
        <label for="name" class="prenom">Prénom</label>
        <input type="text" name="name">
        <label for="email">Email</label>
        <input type="email" name="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password">
        <input type="submit" class="submit">
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

                // Création d'un pargraphe pour confirmer l'inscription
                echo "<p class='succes'>Inscription enregistrée !</p>";

            }
        ?>
    </form>

    <a href="accueil.php" class="lienListe">Retour</a>

    </div>

</body>
</html>
```

## connexion.php
Se connecter depuis la base "login" en vérifiant le mot de passe.
```
<?php

    session_start();
    require_once("connect.php");

?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Inscription / Connexion</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Un essai de login'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
</head>

<body>

    <!-- CONNEXION -->

    <div class='liste'>

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
                    $_SESSION['name'] = $ligneUser['name'];
                } else {
                    echo "<p class='erreur'>Mot de passe incorrect</p>";
                }
            }
        ?>
    </form>

    <a href="accueil.php" class="lienListe">Retour</a>

    </div>

</body>
</html>
```

## liste.php
Voir la liste des personnes inscrites.
```
<?php

    session_start();
    require_once("connect.php");

?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Inscription / Connexion</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Un essai de login'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
</head>

<body>

    <div class="liste">

    <?php 
        if(isset($_SESSION['name'])) {
            echo "<h3 style='margin-bottom: 40px;'>" . $_SESSION['name'] . ", voici la liste des personnes inscrites.</h3>";
        } else {
            echo "<h3 style='margin-bottom: 40px;'>Inconnu, voici la liste des personnes inscrites.</h3>";
        }
    ?>

    <?php

        // Insertion d'une commande SQL dans une variable $sql
        $sql = "SELECT * FROM user";
        // Avec le $connexion de connect.php, enregistrer la requête dans la variable $users
        $users = $connexion->query($sql);
        // fetchALL() retourne un tableau contenant toutes les lignes récupérées dans $users
        $tableauUsers = $users->fetchALL();

        // On créer un tableau HTML
        echo "<table border=1>";
        // On parcourt le tableau $tableauUsers avec un foreach
        foreach ($tableauUsers as $value) {
            // Ici, on insère chacune de ces valeurs dans une ligne de tableau HTML
            echo "<tr><td>" . $value['id'] . "</td><td>" . $value['name'] . "</td><td>" . $value['email'] . "</td></tr>";
        }
        // On ferme le tableau HTML
        echo "</table>";

    ?>

    <a href="accueil.php" class="lienListe">Retour</a>

    </div>

</body>
</html>
```

## deco.php
Se déconnecter avec session_destroy().
```
<?php

    session_start();
    session_destroy();
    require_once("connect.php");

?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Inscription / Connexion</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Un essai de login'>
    <!-- CSS -->
    <link rel='stylesheet' href='css/style.css'>
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
</head>

<body>

    <div class="liste">
        <?php
            echo "<h3>Vous êtes déconnecté !</h3>";
        ?>
        <a href='accueil.php' style="margin-top:40px;">Retour</a>
    </div>

</body>
</html>
```
