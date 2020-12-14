# PhpMyAdmin


## Connexion

PDO

Copiez le code suivant et insérez-le dans votre script PHP afin d'établir une connexion à la base de données. 

Pour votre sécurité, le mot de passe n'est pas affiché. Veuillez modifier votre mot de passe manuellement dans le code.
```
<?php
  $host_name = 'db5001296326.hosting-data.io';
  $database = 'dbs1105568';
  $user_name = 'dbu1510850';
  $password = '<Veuillez saisir ici votre mot de passe.>';
  $dbh = null;

  try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }
?>
```

Veuillez toujours vous connecter à votre base de données en passant par votre site Web / présence Web. Pour des raisons de sécurité, l'accès direct à la base de données, par exemple via votre ordinateur local (connexion ODBC externe), n'est pas possible.

Afin de protéger vos données, votre base de données MySQL se trouve sur un serveur dédié de base de données protégé par un pare-feu.

## phpMyAdmin

En local

> URL : localhost/phpmyadmin

nom d'utilisateur : root

mot de passe : aucun.

Changer les paramètres :

> C:\xampp\phpMyAdmin => config.inc.php

Ligne 19
```
$cfg['Servers'][$i]['auth_type'] = 'cookie';
```
"cookie" pour afficher la fenêtre de connexion.