# SQL

> Base de données "garage" dans phpmyadmin

PHP :

Se connecter à la base de données (fichier connexion.php)
```
<?php

    $connex = new PDO("mysql:host=localhost; dbname=garage", "root", "");

?>
```

Parcourir une table voiture
```
<?php

require_once("connexion.php");

    // Affiche les voitures
    $sql = "SELECT * FROM voitures";
    $voitures = $connex->query($sql);
    $resultat = $voitures->fetchALL();

    echo "<table border=1>";

    foreach ($resultat as $value) {
        echo "<tr><td>" . $value['marque'] . "</td> <td>" . $value['puissance'] . "</td><td>" . $value['carburant'] . "</td></tr>";
    }

    echo "</table>";

?>
```

Ajouter une voiture
```
<?php

require_once("connexion.php");

    $sql = "INSERT INTO `voitures` (`id`, `marque`, `puissance`, `carburant`) VALUES (NULL, 'mercedes', '140', 'diesel')";
    $connex->query($sql);

?>
```

