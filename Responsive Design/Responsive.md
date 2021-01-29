# Responsive Design

## Étape 1 : HTML

Insérer la balise meta viewport :
```html
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

## Étape 2 : CSS

### Utiliser GRID pour la structure du site

### Utiliser FLEXBOX pour les différentes sections

### Conseils :

#### Images

Utiliser la balise \<picture> pour changer l'image en fonction de la taille d'écran :
```html
<picture>
  <source srcset="img_smallflower.jpg" media="(max-width: 600px)">
  <source srcset="img_flowers.jpg" media="(max-width: 1500px)">
  <source srcset="flowers.jpg">
  <img src="img_smallflower.jpg" alt="Flowers">
</picture>
```

### Texte

Utiliser "vw" comme taille de texte :
```html
<h1 style="font-size:10vw">Hello World</h1>
```
