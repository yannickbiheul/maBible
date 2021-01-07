# Composer (PHP)

## Installer Composer

getcomposer.org


## Initialiser Composer

> CMD
```
C:\xampp\htdocs>cd mvc_objets

C:\xampp\htdocs\mvc_objets>composer init


  Welcome to the Composer config generator



This command will guide you through creating your composer.json config.

Package name (<vendor>/<name>) [yannick/mvc_objets]:
Description []:
Author [Yannick Biheul <yannickbiheul@outlook.fr>, n to skip]:
Minimum Stability []:
Package Type (e.g. library, project, metapackage, composer-plugin) []: project
License []:

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? no

{
    "name": "yannick/mvc_objets",
    "type": "project",
    "authors": [
        {
            "name": "Yannick Biheul",
            "email": "yannickbiheul@outlook.fr"
        }
    ],
    "require": {}
}

Do you confirm generation [yes]? yes
Would you like the vendor directory added to your .gitignore [yes]?
```

> composer.json
```
{
    "name": "yannick/mvc_objets",
    "type": "project",
    "autoload": {
        "psr-4": {
            "mvc_objets\\": "src"
        }
    },
    "authors": [
        {
            "name": "Yannick Biheul",
            "email": "yannickbiheul@outlook.fr"
        }
    ],
    "require": {}
}
```

## Charger l'autoload

> CMD
```
composer dumpautoload
```