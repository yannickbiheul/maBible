# Symfony

## Installation

[Symfony](https://symfony.com/download)

### Lignes de commande 

#### Vérifier l'installation

```symfony -v```

#### Initialiser un projet (nom du projet : projet)
``` symfony new --full projet```

#### Lancer serveur
```symfony server:start```

#### Lier la base de données et lui donner un nom

> Dans le fichier .env

```DATABASE_URL="mysql://root:@127.0.0.1:3306/zoo?serverVersion=5.7"```

Commenter la ligne mysql et dé-commenter les autres.

#### Créer la base de données

```php bin/console doctrine:database:create```

#### Créer une table (Animal)

```php bin/console make:entity Animal```

Remplir les champs, exemple :

nom->string->255->no ;  color->string->255->yes ; famille->string->255->yes

#### Migration permet de créer et modifier les tables

```php bin/console make:migration```
```php bin/console doctrine:migrations:migrate```



#### Repository (model) remplace le Dao

#### Les vues sont dans le dossier templates