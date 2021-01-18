# Fonctions PHP

## Chaines de caractères

> ltrim()

Supprime les espaces (ou d'autres caractères) de début de chaîne.
```php
ltrim ( string $string , string $characters = " \n\r\t\v\0" ) : string
```
**string**

La chaîne d'entrée.

**characters**

Il est aussi possible de spécifier les caractères à supprimer en utilisant le paramètre characters. Listez simplement les caractères que vous voulez supprimer dans ce paramètre. Avec .., vous pourrez spécifier des intervalles de caractères.

> strlen()

Cette fonction retourne la longueur d'une chaîne de caractères.
```php
$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);
```

> str_replace()

Remplace une chaîne de caractères par une autre.
```php
$ma_variable = str_replace('b', 'p', 'bim bam boum');
```
Remplace les "b" par des "p" : pim pam poum

> str_shuffle()

Mélanger aléatoirement les caractères d'une chaîne.
```php
$chaine = 'Cette chaîne va être mélangée !';
$chaine = str_shuffle($chaine);
```

> strtolower()

Met tous les caractères d'une chaîne en minuscules.
```php
$chaine = 'COMMENT CA JE CRIE TROP FORT ???';
$chaine = strtolower($chaine);
```

> strtoupper()

Met tous les caractères d'une chaîne en majuscules.
```php
$chaine = 'j'aimerais parler plus fort.';
$chaine = strtoupper($chaine);
```

> substr()
Retourne un segment de chaîne.

## Date

> date()

- H : Heure
- i : Minute
- d : Jour
- m : Mois
- Y : Année

Obtenir la date complète et l'heure :
```php
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

## Fichiers

> dirname()
Renvoie le chemin du dossier parent.

## Formulaires

> isset()

Pour tester si un input est rempli, ou plutôt si une variable est définie.
```php
isset('$GET['nom']);
```

> empty()

pour vérifier qu'un input n'est pas vide.
```php
!empty($_GET['nom']);
```

> nl2br()

permet de convertir les retours à la ligne en balises HTML "br"  . C'est une fonction dont vous aurez sûrement besoin pour conserver facilement les retours à la ligne saisis dans les formulaires.
```php
<div class="contenuBillet">
    <p><?php echo nl2br(htmlspecialchars($data['contenu'])) ?></p>
</div>
```

## Tableaux

> array_key_exists()

Vérifier si une clé existe dans le tableau

Donner le nom de la clé à rechercher, puis le nom de l'array dans lequel on fait la recherche. Renvoie un booléen.
```php
php array_key_exists('cle', $array);
```

> in_array()

Vérifier si une valeur existe dans le tableau

Donner le nom de la valeur à rechercher, puis le nom de l'array dans lequel on fait la recherche. Renvoie un booléen.
```php
in_array('valeur', $array); 
```

> array_search()

Récupérer la clé d'une valeur dans le tableau

```php
$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
```
in_array() renvoie 4.

