# Model View Controller en PHP

> Dossier MVC

## Création d'un MVC
- Création base de données "formation" avec une table "cours"
- La table cours contient : id, code, titre et langage.
- Création d'un index.php dans le dossier DWWM_BackEnd/mvc.
```
<?php 

    echo "Requête : " . $_SERVER['QUERY_STRING'];

?>
```
Ce code vient chercher l'url de la page et nous le renvoie.

### Réécriture des URL
Créer un fichier .htaccess 
```
RewriteEngine on
RewriteRule ^etudiants$ index.php
```
'^' pour indiquer le début de l'expression, '\$' pour indiquer la fin.
```
RewriteEngine on
RewriteRule ^([A-Za-z0-9\-\_\/]*)$ index.php?action=$1
```
$1 correspond à la regex (expression régulière).
