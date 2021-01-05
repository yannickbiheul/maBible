# Exemple Objet en PHP

### Pour un site qui permet l'inscription de visiteurs

Créer un dossier classes qui contiendra toutes les classes.

Créer un fichier utilisateur.class.php dans le dossier classes.

> classes/utilisateur.class.php
```
<?php

    class Utilisateur {
        
    }

?>
```

Inclure les fichiers dans le fichier principal.

> index.php
```
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objets PHP</title>
</head>
<body>
    
    <h1>Les objets en PHP</h1>

    <?php

        require 'classes/utilisateur.class.php';

    ?>

</body>
</html>
```

#### Création d'une nouvelle instance

Pour créer une instance de la classe Utilisateur, on écrit ceci :
```
new Utilisateur();
```


