# La syntaxe MarkDown

## Les paragraphes
Un paragraphe est une ou plusieurs lignes de texte. En Markdown, pour terminer un paragraphe, créez une ligne vide avant de commencer le suivant.
```
Ceci est un paragraphe.

Encore un !
```

Petite astuce, pour ne sauter qu'une ligne au sein d'un paragraphe, terminez votre ligne avec deux espaces puis faites un retour à la ligne.

## En gras
La mise en forme d'un mot en gras est simple. Il suffit de l'entourer avec deux astérisques (**).
```
**Phrase en gras**
```

Ou encore de deux underscore (__).
```
__Phrase en gras__
```

## En italique
Pour mettre un texte en italique, il faut utiliser un astérisque (*) ou un underscore (_).
```
*Phrase en italique*

_Phrase en italique_
```

## Les titres
En Markdown, 6 niveaux de titres sont disponibles. Plusieurs méthodes sont possibles.
Pour la première, il faut précéder le titre avec un dièse (#).
```
# Titre de niveau 1
## Titre de niveau 2
### Titre de niveau 3
#### Titre de niveau 4
##### Titre de niveau 5
###### Titre de niveau 6
```

L'autre méthode ne permet de faire que 2 niveaux :
```
Titre 1
=======

Titre 2
-------
```
Peu importe le nombre de "=" ou de "-".

## Les listes
Vous pouvez faire des listes à puces ordonées ou non.
```
* Item 1
* Item 2
* Item 3
```
Pour des listes numérotées (ordonnées) :
```
1. Item 1
2. Item 2
3. Item 3
```

## Les listes imbriquées
Le principe est le même que pour les listes vu ci-dessus. Il suffit d'effectuer une tabulation pour imbriquer une autre liste :
```
- Item 1
    - Item 1.1
        - Item 1.1.1
- Item 2
```

## Les liens
Voici la syntaxe pour créer des liens :
```
[Texte du lien](http://www.google.fr "Texte pour le titre, facultatif")
```

## Les liens par référence
Au lieu d'insérer l'URL du lien directement, vous pouvez utiliser les références si vous devez utiliser l'URL régulièrement dans le document (ou pour plus de lisibilité).
```
Rendez-vous sur [Texte du lien][monsite] !

[monsite]: http://www.google.fr "Titre facultatif"
```

## Les images
La syntaxe pour insérer une image est semblable à celle pour créer un lien :
```
![Texte alternatif](http://www.monsite.fr/image.png "Texte pour le titre, facultatif")
```

## Les images par référence
A la manière des liens, vous pouvez insérer des images en utilisant les références.
```
![Text alternatif][img-monsite]

[img-monsite]: http://www.monsite.fr/image.png "Titre facultatif"
```

## Les citations
Pour les citations, c'est également tout simple ! Vous devez précéder les lignes d'un chevron ">" :
```
> Ceci est une citation
```

## Code source (bloc)
Pour insérer un code, il suffit de l'indenter d'une tabulation ou de 4 espaces.
```
Exemple de code :
    <?php echo 'Hello World!'; ?>
```
Ajouter le langage après les template strings pour la coloration.

## Code source (en ligne)
Vous pouvez également insérer du code en mode ligne, dans un paragraphe. Entourez-le d'accents graves "`" :
```
Utilises la fonction `strpad()` !
```

## Séparateur horizontal
Un séparateur peut être inséré via 3 tirets ou astérisques :
```
---

* * *

- - -
```

