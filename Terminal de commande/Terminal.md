# Terminal de commande

- pwd : voir où on est
- pwd --help : help sur la commande pwd
- ls : liste des dossiers et fichiers
- ls -la : liste détaillée (l) des dossiers et fichiers + affichage des dossiers/fichiers cachés (a)
- . : Dossier en cours
- .. : Dossier parent
- Flèche haut et bas : naviguer dans l'historique du terminal
- tab : autocomplétion
- ctrl + r : recherche dans l'historique
- ctrl + a : début de ligne de commande
- ctrl + e : fin de ligne de commande
- mkdir : Créer un répertoire
- touch : Créer un fichier
- mv : Déplacer un dossier/fichier : "mv fichierAdeplacer poubelle"
- Opération inverse : "mv poubelle/fichierAdeplacer ."
- "*" : Pour attraper tous les fichiers.dossiers
- Exemple : ls * : Liste tous les dossiers et fichiers en arborescence
- cp : Copier un dossier/fichier : "cp fichierAcopier dossier"
- Copier un fichier et cganger son nom : "cp index.html index2.html"
- cp -r : Pour copier l'ensemble d'un dossier et ses sous-dossiers
- man : Affiche l'aide d'une commade : "man pwd" (ne fonctionne pas sur git Bash)
- q : Pour quitter
- cat : Affiche le contenu d'un fichier
- less : Affiche le contenu d'un fichier en plus propre
- code : Ouvrir un fichier avec visual studio code : "code index.html"
- ">" : Pour rediriger : "ls -l > liste.txt" : enregistre la liste des répertoires dans le fichier liste.txt
- grep : chercher des éléments à l’intérieur d’un fichier : "grep body index.html"

## Enregistrer une commande dans un fichier
```
C:\xampp\mysql\bin>echo test
test

C:\xampp\mysql\bin>echo test > test.txt
```
"test" est enregistré dans un fichier nommé "test.txt", dans le dossier "C:\xampp\mysql\bin"