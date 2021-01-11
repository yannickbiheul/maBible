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
Un objet de la classe Utilisateur est créé. On capture cet objet dans une variable
```
$pierre = new Utilisateur();
```

#### Propriétés

Une propriété est une variable définie dans une classe (ou éventuellement ajoutée à un objet après sa création).

La portée d'une propriété est définie par les mots clés "public", "private" et "protected". C'est l'encapsulation.

Ajout des propriétés user_name (nom d'utilisateur) et user_pass (mot de passe) à la classe Utilisateur :
> classes/utilisateur.class.php
```
<?php

    class Utilisateur {
        public $user_name;
        public $user_pass;
    }

?>
```
Création de 2 objets (pierre et mathilde) et définition de leurs propriétés :
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

        $pierre = new Utilisateur();
        $mathilde = new Utilisateur();

        $pierre->user_name = "Pierre";
        $pierre->user_pass = "abcdef";

        $mathilde->user_name = 'Mathilde';
        $mathilde->user_pass = 123456;

    ?>

</body>
</html>
```

#### Méthodes

Une méthode est une fonction déclarée dans une classe.

Pour des raisons de sécurité, on va déclarer les propriétés en "private" plutôt qu'en "public".

Cela va permettre d'éviter les erreurs de manipulation, entre autre.

Une propriété déclarée en "private" ne sera utilisable seulement à l'intérieur de la classe.

Création des méthodes : getNom (pour obtenir le nom), setNom(pour définir le nom), et setPass(pour définir le mot de passe).
> classes/utilisateur.class.php
```
<?php

    class Utilisateur {
        private $user_name;
        private $user_pass;

        public function getNom() {
            return $this->user_name;
        }

        public function setNom($new_user_name) {
            $this->user_name = $new_user_name;
        }

        public function setPass($new_user_pass) {
            $this->user_pass = $new_user_pass;
        }
    }

?>
```
Grâce à ça, on doit passer par les méthodes setNom() et setPass() pour changer les valeurs des propriétés, et donc y ajouter des conditions.

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

        $pierre = new Utilisateur();
        $mathilde = new Utilisateur();

        $pierre->setNom('Pierre');
        $pierre->setPass('abcdef');
        echo $pierre->getNom();

        echo "<br>";
        
        $mathilde->setNom('Mathilde');
        $mathilde->setPass(123456);
        echo $mathilde->getNom();

    ?>

</body>
</html>
```

#### Constructeur et destructeur d'objets

***Constructeur***

Méthode qui va être appelée (exécutée) automatiquement à chaque fois qu’on va instancier une classe.

Pour initialiser des propriétés dès la création d'un objet.

> classes/utilisateur.class.php
```
<?php

    class Utilisateur {
        private $user_name;
        private $user_pass;

        public function __construct($n, $p) {
            $this->user_name = $n;
            $this->user_pass = $p;
        }

        public function getNom() {
            return $this->user_name;
        }

    }

?>
```

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

        $pierre = new Utilisateur('Pierre', 'abcdef');
        $mathilde = new Utilisateur('Mathilde', 123456);

        echo $pierre->getNom() . "<br>";
        echo $mathilde->getNom() . "<br>";

    ?>

</body>
</html>
```
***Exemple d'utilisation d'un constructeur avec un formulaire***
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

    <form action="index.php" method="POST">
        <input type="text" name="name" placeholder="Votre nom">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="submit" value="Envoyer">
    </form>

    <?php

        require 'classes/utilisateur.class.php';

        if (isset($_POST['name']) && isset($_POST['password'])) {
            $pierre = new Utilisateur($_POST['name'], $_POST['password']);
            echo "<p>Votre nom : " . $pierre->getNom() . "</p>";
        } else {
            echo "";
        }

    ?>

</body>
</html>
```

***Destructeur***

La méthode destructeur va permettre de nettoyer les ressources avant que PHP ne libère l’objet de la mémoire.

> classes/utilisateur.class.php
```
<?php

    class Utilisateur {
        private $user_name;
        private $user_pass;

        public function __construct($n, $p) {
            $this->user_name = $n;
            $this->user_pass = $p;
        }

        public function __destruct() {
            // Du code à exécuter
        }

        public function getNom() {
            return $this->user_name;
        }

    }

?>
```

#### Encapsulation

Il existe 3 niveaux de visibilité différents pour les propriétés, les méthodes et les constantes.

* Les niveaux "public" vont être accessibles partout, depuis l'intérieur et l'extérieur des classes.
* Les niveaux "private" ne vont être accessibles que depuis l'intérieur de la classe qui les a définies.
* Les niveaux "protected" ne vont être accessibles que depuis l'intérieur de la classe qui les a définies ainsi que depuis les classes qui en héritent ou la classe parente.

#### Classes étendues et héritage

Création d'une classe Admin qui va étendre la classe Utilisateur grâce au mot-clé "extends" :
> classes/admin.class.php
```
<?php

    class Admin extends Utilisateur {
        
    }

?>
```
La classe Admin étend la classe Utilisateur. Elle hérite et va pouvoir accéder à toutes les méthodes et aux propriétés de la classe Utilisateur qui n’ont pas été définies 
avec le mot clef private.

Inclure les classes mère et fille dans le fichier de script principal en commençant par la mère.

Création d'un Admin et d'un Utilisateur
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
        require 'classes/admin.class.php';

        $pierre = new Admin('Pierre', 'abcdef');
        $mathilde = new Utilisateur('Mathilde', 123456);

        echo $pierre->getNom() . "<br>";
        echo $mathilde->getNom();

    ?>

</body>
</html>
```
Si on définit une nouvelle méthode dans la classe "Admin" dont le rôle est de renvoyer la valeur de "user_name" par exemple, 
le PHP va chercher une propriété "user_name" dans la classe "Admin" et ne va pas la trouver.

Si on souhaite que des classes étendues puissent manipuler les propriétés d’une classe mère, alors il faudra définir le niveau de visibilité de ces propriétés comme protected dans
la classe mère.

> classes/utilisateur.class.php
```
<?php

    class Utilisateur {
        protected $user_name;
        protected $user_pass;

        public function __construct($n, $p) {
            $this->user_name = $n;
            $this->user_pass = $p;
        }

        public function getNom() {
            return $this->user_name;
        }

    }

?>
```

#### Définition de nouvelles propriétés et méthodes dans une classe étendue et surcharge

Création d'une propriété "ban" qui contiendra les utilisateurs bannis et les méthodes setBan() et getBan().
> classes/admin.class.php
```
<?php

    class Admin extends Utilisateur {
        protected $ban;

        public function setBan($b) {
            $this->ban[] .= $b;
        }

        public function getBan() {
            echo "Utilisateurs bannis par " . $this->user_name . " : ";
            foreach ($this->ban as $valeur) {
                echo $valeur . ", ";
            }
        }
    }

?>
```

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
        require 'classes/admin.class.php';

        $pierre = new Admin('Pierre', 'abcdef');
        $mathilde = new Utilisateur('Mathilde', 123456);

        echo $pierre->getNom() . "<br>";
        echo $mathilde->getNom() . "<br>";

        $pierre->setBan('Paul');
        $pierre->setBan('Jacques');
        echo $pierre->getBan();

    ?>

</body>
</html>
```

#### Surcharger 

Surcharger des propriétés et des méthodes : les redéfinir dans la classe fille.

La nouvelle définition doit posséder le même nombre de paramètres.

Changement de la méthode getNom() dans la classe Admin pour afficher le nom en majuscule (strtoupper()).
> classes/admin.class.php
```
<?php

    class Admin extends Utilisateur {
        protected $ban;

        public function getNom() {
            return strtoupper($this->user_name);
        }

        public function setBan($b) {
            $this->ban[] .= $b;
        }

        public function getBan() {
            echo "Utilisateurs bannis par " . $this->user_name . " : ";
            foreach ($this->ban as $valeur) {
                echo $valeur . ", ";
            }
        }
    }

?>
```

On peut définir directement le nom en majuscules en surchargeant la méthode constructeur
> classes/admin.class.php
```
<?php

    class Admin extends Utilisateur {
        protected $ban;

        public function __construct($n, $p) {
            $this->user_name = strtoupper($n);
            $this->user_pass = $p;
        }

        public function setBan($b) {
            $this->ban[] .= $b;
        }

        public function getBan() {
            echo "Utilisateurs bannis par " . $this->user_name . " : ";
            foreach ($this->ban as $valeur) {
                echo $valeur . ", ";
            }
        }
    }

?>
```

#### Opérateur de résolution de portée

Sert à accéder à la définition de base d'une propriété ou méthode surchargée.

Il existe 3 mots clés pour les opérateurs de résolution de portée :
* parent
* self
* static

Dans la méthode getNom() de la classe mère, "return" empêche l'exécution de code après l'instruction, on le remplace donc par "echo".
> classes/utilisateur.clas.php
```
<?php

    class Utilisateur {
        protected $user_name;
        protected $user_pass;

        public function __construct($n, $p) {
            $this->user_name = $n;
            $this->user_pass = $p;
        }

        public function getNom() {
            echo $this->user_name;
        }

    }

?>
```

Dans la classe fille, on surcharge la méthode getNom(). Elle reprendra le code de la classe mère et ajoutera une nouvelle instruction.
> classes/admin.class.php
```
<?php

    class Admin extends Utilisateur {
        protected $ban;

        public function __construct($n, $p) {
            $this->user_name = strtoupper($n);
            $this->user_pass = $p;
        }

        public function getNom() {
            parent::getNom();
            echo " (depuis la classe étendue)";
        }

        public function setBan($b) {
            $this->ban[] .= $b;
        }

        public function getBan() {
            echo "Utilisateurs bannis par " . $this->user_name . " : ";
            foreach ($this->ban as $valeur) {
                echo $valeur . ", ";
            }
        }
    }

?>
```

#### Constantes de classe

Une constante appartient à la classe dans laquelle elle a été créée. Tous les objets de cette classe partageront cette constante.

Ajout d'une constante ABONNEMENT à la classe utilisateur :
> classes/utlisateur.class.php
```
<?php

    class Utilisateur {
        protected $user_name;
        protected $user_pass;
        public const ABONNEMENT = 15;

        public function __construct($n, $p) {
            $this->user_name = $n;
            $this->user_pass = $p;
        }

        public function getNom() {
            echo $this->user_name;
        }

    }

?>
```
On accède à cette constante avec l'opérateur de résolution de portée.

Ajout des fonctions setPrixAbo() et getPrixAbo() et des propriétés "user_region" et "prix_abo" et changement du constructeur dans la classe utilisateur :
> classes/utilisateur.class.php
```
<?php

    class Utilisateur {
        protected $user_name;
        protected $user_pass;
        protected $user_region;
        protected $prix_abo;
        public const ABONNEMENT = 15;

        public function __construct($n, $p, $r) {
            $this->user_name = $n;
            $this->user_pass = $p;
            $this->user_region = $r;
        }

        public function getNom() {
            echo $this->user_name;
        }

        public function setPrixAbo() {
            // Les utilisateurs du Sud paieront 2 fois moins cher
            if ($this->user_region === 'Sud') {
                return $this->prix_abo = self::ABONNEMENT / 2;
            } else {
                return $this->prix_abo = self::ABONNEMENT;
            }
        }

        public function getPrixAbo() {
            echo $this->prix_abo;
        }

    }

?>
```
On utilise "self::ABONNEMENT" car la constante est définie dans la même classe.

Surcharge de la méthode setPrixAbo() dans la classe Admin :
> classes/admin.class.php
```
<?php

    class Admin extends Utilisateur {

        protected $ban;
        public const ABONNEMENT = 5;

        public function __construct($n, $p, $r) {
            $this->user_name = strtoupper($n);
            $this->user_pass = $p;
            $this->user_region = $r;
        }

        public function setBan($b) {
            $this->ban[] .= $b;
        }

        public function getBan() {
            echo "Utilisateurs bannis par " . $this->user_name . " : ";
            foreach ($this->ban as $valeur) {
                echo $valeur . ", ";
            }
        }

        public function setPrixAbo() {
            if ($this->user_region === 'Sud') {
                return $this->prix_abo = self::ABONNEMENT;
            } else {
                return $this->prix_abo = parent::ABONNEMENT / 2;
            }
        }
    }

?>
```
Les administrateurs ont une constante ABONNEMENT de 5.

Quand un administrateur vient du Sud, il paie 5 (constante de la classe Admin).

Sinon, il paie 15 (constante de la classe Utilisateur) / 2.

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
        require 'classes/admin.class.php';

        $pierre = new Admin('Pierre', 'abcdef', 'Sud');
        $mathilde = new Admin('Mathilde', 123456, 'Nord');
        $florian = new Utilisateur('Florian', 'flotri', 'Est');

        $pierre->setPrixAbo();
        $mathilde->setPrixAbo();
        $florian->setPrixAbo();

        $u = "Utilisateur";
        echo "Valeur de l'abonnement dans Utilisateur : " . $u::ABONNEMENT . "<br>";
        echo "Valeur de l'abonnement dans Admin : " . Admin::ABONNEMENT . "<br>";

        $texte = "Prix de l'abonnement pour : ";
        echo $texte;
        $pierre->getNom();
        echo " : ";
        $pierre->getPrixAbo();
        echo "<br>";

        echo $texte;
        $mathilde->getNom();
        echo " : ";
        $mathilde->getPrixAbo();
        echo "<br>";

        echo $texte;
        $florian->getNom();
        echo " : ";
        $florian->getPrixAbo();
        echo "<br>";


    ?>

</body>
</html>
```
"$u" contient "Utilisateur".

"$u::ABONNEMENT" correspond donc à "Utilisateur::ABONNEMENT".

#### Propriétés et méthodes statiques

Une propriété ou méthode statique ne va pas appartenir à un objet en particulier mais à la classe en soi.

Dans la classe Admin, on a une propriété "$ban" qui contient la liste des utilisateurs bannis.

Si pierre bannit paul et jacques, la propriété "$ban" de pierre contiendra paul et jacques.

Si mathilde bannit luc, la propriété "$ban" de mathilde contiendra luc.

On veut que la propriété "$ban" contienne paul, jacques et luc.

Pour cela, on va transformer cette propriété en propriété statique.

On utilise l'opérateur de résolution de portée pour accéder à une propriété ou méthode statique.

Dans la classe Admin, on déclare la propriété "$ban" comme statique, et on modifie le code des méthodes setBan() et getBan().

> classes/admin.class.php
```
<?php

    class Admin extends Utilisateur {

        protected static $ban;
        public const ABONNEMENT = 5;

        public function __construct($n, $p, $r) {
            $this->user_name = strtoupper($n);
            $this->user_pass = $p;
            $this->user_region = $r;
        }

        public function setBan(...$b) {
            foreach ($b as $banned) {
                self::$ban[] .= $banned;
            }
        }

        public function getBan() {
            echo "Utilisateurs bannis : ";
            foreach (self::ban as $valeur) {
                echo $valeur . ", ";
            }
        }

        public function setPrixAbo() {
            if ($this->user_region === 'Sud') {
                return $this->prix_abo = self::ABONNEMENT;
            } else {
                return $this->prix_abo = parent::ABONNEMENT / 2;
            }
        }
    }

?>
```
En passant la propriété "$ban" en static, sa valeur va être partagée par tous les objets de la classe.

Les 3 points (...) devant la liste des paramètres de la méthode setBan() permettent d'accepter un nombre variable d'arguments.

Dans les méthodes setBan() et getBan(), on remplace "this->" par "self::" car "$ban" est désormais statique. Seul l'opérateur de résolution de portée permet d'y accéder.

La boucle foreach() de la méthode setBan() définit "ban" comme un tableau ($ban[]).

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
        require 'classes/admin.class.php';

        $pierre = new Admin('Pierre', 'abcdef', 'Sud');
        $mathilde = new Admin('Mathilde', 123456, 'Nord');
        $florian = new Utilisateur('Florian', 'flotri', 'Est');

        $pierre->setBan('Paul', 'Jacques');
        $mathilde->setBan('Luc');

        $pierre->getBan();
        echo "<br>";
        $mathilde->getBan();

    ?>

</body>
</html>
```

#### Méthodes et classes abstraites

Une classe abstraite na va pas pouvoir être instanciée directement.

Elle va servir de plan pour les classes qui vont y être étendues.

Une méthode abstraite est une méthode dont seule la signature (nom et paramètres) va pouvoir être déclarée.

Dès qu'une classe possède une méthode abstraite, elle doit être déclarée comme classe abstraite.

Lors de l'héritage d'une classe abstraite, les méthodes déclarées comme abstraites dans la classe parent doivent obligatoirement être définies dans la classe enfant avec les signatures correspondantes.

On va transformer la classe Utilisateur en classe abstraite et lui étendre les classes Admin et Abonne.

> classes/utilisateur.class.php
```

```





