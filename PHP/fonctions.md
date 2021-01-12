# Fonctions PHP

## Chaines de caractères

> strlen()

Cette fonction retourne la longueur d'une chaîne de caractères.
```
$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);
```

> str_replace()

Remplace une chaîne de caractères par une autre.
```
$ma_variable = str_replace('b', 'p', 'bim bam boum');
```
Remplace les "b" par des "p" : pim pam poum

> str_shuffle()

Mélanger aléatoirement les caractères d'une chaîne.
```
$chaine = 'Cette chaîne va être mélangée !';
$chaine = str_shuffle($chaine);
```

> strtolower()

Met tous les caractères d'une chaîne en minuscules.
```
$chaine = 'COMMENT CA JE CRIE TROP FORT ???';
$chaine = strtolower($chaine);
```

> strtoupper()

Met tous les caractères d'une chaîne en majuscules.
```
$chaine = 'j'aimerais parler plus fort.';
$chaine = strtoupper($chaine);
```

## Date

> date()

- H : Heure
- i : Minute
- d : Jour
- m : Mois
- Y : Année

Obtenir la date complète et l'heure :
```
<?php
// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure. ' h ' . $minute;
?>
```

## Formulaires

> isset()

Pour tester si un input est rempli, ou plutôt si une variable est définie.
```
isset('$GET['nom']);
```

> empty()

pour vérifier qu'un input n'est pas vide.
```
!empty($_GET['nom']);
```

## Tableaux

> array_key_exists()

Vérifier si une clé existe dans le tableau

Donner le nom de la clé à rechercher, puis le nom de l'array dans lequel on fait la recherche. Renvoie un booléen.
```
php array_key_exists('cle', $array);
```

> in_array()

Vérifier si une valeur existe dans le tableau

Donner le nom de la valeur à rechercher, puis le nom de l'array dans lequel on fait la recherche. Renvoie un booléen.
```
in_array('valeur', $array); 
```

> array_search()

Récupérer la clé d'une valeur dans le tableau

```
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
```
in_array() renvoie 4.
