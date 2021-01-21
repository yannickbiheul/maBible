# Symfony

## Installation

[Symfony](https://symfony.com/download)

Attention à la version PHP 8.0.1

## Lignes de commande 

### Vérifier l'installation

```symfony -v```

### Initialiser un projet (nom du projet : projet)
``` symfony new --full projet```

Ensuite, se placer dans le dossier du projet.

### Lancer serveur
```symfony server:start```

Ouvrir ensuite un nouveau terminal

### Lier la base de données et lui donner un nom

> Dans le fichier .env

```DATABASE_URL="mysql://root:@127.0.0.1:3306/zoo"```

Commenter la ligne mysql et dé-commenter les autres.

Enlever la partie "?serverVersion=5.7".

### Créer la base de données

```php bin/console doctrine:database:create```

### Créer une table (Animal)

```php bin/console make:entity Animal```

Remplir les champs, exemple :

nom->string->255->no ;  color->string->255->yes ; famille->string->255->yes

CTRL+C pour quitter

### Migration 

Le principe de la migration est de mettre a jour la structure de la BDD si il y a un
changement. Ce principe est aussi utilisé la 1ère fois. Un fichier php est généré à chaque
migration.

```php bin/console make:migration```

```php bin/console doctrine:migration:migrate```

### Fixtures

Les fixtures permettent de remplir les tables pour faire des tests.

Création dossier Fixtures

```composer require orm-fixtures --dev ```

```php bin/console make:fixtures AnimalFixtures```

> AnimalFixtures.php :

```php
use App\Entity\Animal

dans la fonction load() {
	$a1 = new Animal();
	$a1->setNom('cheval')->setDescription("lorem ipsum…");
    $manager->persist($a1);
    
	$a2 = new Animal();
	$a2->setNom('chat')->setDescription("lorem ipsum 2…");
	$manager->persist($a2);
		
	$a3 = new Animal();
	$a3->setNom('chien')->setDescription("lorem ipsum 2…");
	$manager->persist($a3);
		
	$manager->flush;
}
```

```php bin/console doctrine:fixtures:load ```

### Controller

Création AnimalController :

```php bin/console make:controller AnimalController```

> (AnimalController.php)

Dans les annotations : 
```php
/**
 * @Route("/", name="animal")
 */
 ```

 > Animal/index.html.twig
 ```html
 <ul>
 {% for animal in animaux %}
    <li>{{animal.nom}} de la couleur {{animal.color}}</li>
 {% endfor %}
 </ul>
 ```

On peut donner un nom à une route ( name dans annotation) et l’utiliser avec path() dans notre
template menu avec la commande {{ path('lenom') }} 

Pour accéder aux données dans le répertoire public utiliser asset('chemin/vers/images/ou/css')

> AnimalController.php

```php 
$repository = $this->getDoctrine()->getRepository(Animal::class);
$animaux = $repository->findAll();
```

Dans Repository il y a des méthodes déjà définies (exemple find.All() et d’autres).
