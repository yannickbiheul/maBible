# Les expressions régulières

### Exemples

Tester si le mot guitare est présent
```
if (preg_match('#guitare#', 'Je joue de la guitare')) {
        echo "VRAI";
    } else {
        echo "FAUX";
    }
```
Tester si les mots guitares et banjo sont présents
```
if (preg_match('#guitare|banjo#', 'Je joue de la guitare et du banjo')) {
        echo "VRAI";
    } else {
        echo "FAUX";
    }
```
Pour que l'expression ne soit pas sensible à la casse, on ajoute un "i"
```
if (preg_match('#GUITARE#i', 'Je joue de la guitare')) {
        echo "VRAI";
    } else {
        echo "FAUX";
    }
```
Pour vérifier qu'un mot est bien à la fin de la phrase
```
if (preg_match('#PHP$#', 'Vive PHP')) {
        echo "VRAI";
    } else {
        echo "FAUX";
    }
```
Pour vérifier qu'un mot est bien au début de la phrase
```
if (preg_match('#^Vive#', 'Vive PHP')) {
        echo "VRAI";
    } else {
        echo "FAUX";
    }
```
Dans cet exemple, on vérifie qu'une des 3 lettres entre crochets soit bien présente
```
if (preg_match('#gr[iao]s#', 'La nuit tous les chats sont gris')) {
        echo "VRAI";
    } else {
        echo "FAUX";
    }
```
Les crochets servent aussi à vérifier des intervalles : ici on accepte toutes les lettres comprises entre a et z en minuscules et en majuscules.

Le fonctionnement est le même pour les nombres ([0-9]).
```
if (preg_match('#gr[a-zA-Z]s#', 'La nuit tous les chats sont gris')) {
        echo "VRAI";
    } else {
        echo "FAUX";
    }
```
Vérifier la présence d'une balise titre en HTML :
```
if (preg_match('#<h[1-6]>#', 'La nuit tous les <h2>chats</h2> sont gris')) {
        echo "VRAI";
    } else {
        echo "FAUX";
    }
```
À l'inverse, si on ne veut pas que ce soit entre 1 et 6, on ajoute un accent circonflexe :
```
if (preg_match('#<h[^1-6]>#', 'La nuit tous les <h8>chats</h8> sont gris')) {
        echo "VRAI";
    } else {
        echo "FAUX";
    }
```
Si l'accent circonflexe (^) se trouve au début de l'expression régulière, ça veut dire qu'on vérifie que le mot qui le suit se trouve au début de la phrase.

Si il se trouve dans des crochets, ça veut dire qu'on vérifie que l'expression suivante est bien différente.

[Cours sur les expressions régulières](https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/916990-les-expressions-regulieres-partie-1-2)
