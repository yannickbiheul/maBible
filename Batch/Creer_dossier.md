## Créer Dossier

```bat
cd Bureau
set /p dl=Qu'est-ce que tu veux qu'il a comme nom ton dossier ? 
mkdir %dl%
cd %dl%
mkdir images
mkdir js
mkdir css
type nul > index.html
cd js
type nul > main.js
cd ..
cd css
type nul > main.css
```