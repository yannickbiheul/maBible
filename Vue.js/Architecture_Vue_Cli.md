# Architecture d'application Vue Cli

**node_modules** 
- Contient l'ensemble des dépendances qui permettent à votre application de faire tout ce qu'elle fait. Vous n'aurez que rarement (sinon jamais) besoin d'aller dans ce dossier, car il n'est généralement pas attaché au repository, mais directement géré par npm ;

**public** 
- Ce répertoire contient le favicon.ico et le fichier  index.html  de base qui serviront à générer le reste de votre application ;

**src** 
- Ce répertoire est celui dans lequel vous passerez 99 % de votre temps, car la quasi-totalité de votre code y sera située ;

**.gitignore** 
- Ce fichier contient une liste de fichiers et/ou de répertoires qui ne seront pas attachés à un repository. Citons ici deux exemples courants avec le répertoire  /dist, qui est généré de manière automatique à chaque build (et ne nécessite donc aucun suivi), et le répertoire  node_modules, qui est automatiquement recréé à chaque lancement de la commande  npm install  ou yarn install;

**package.json** 
- Il s'agit du fichier de configuration de base de votre projet. Il comprend des métadonnées comme le nom et la version de votre projet, mais il contient également des informations essentielles comme les scripts pouvant être exécutés (comme serve, build, lint) et les dépendances requises pour votre projet :

**serve** 
- Il s'agit du script qui permet de lancer une environnement de développement en local,

**build** 
- Ce script permet de créer la version finale qui sera livrée à un client ou à l'utilisateur.

## src :

**Assets** 
- Il s'agit du répertoire dans lequel vous placerez les images et les autres ressources obligatoires auxquelles vous devrez peut-être faire référence dans votre application (c'est-à-dire les vidéos, les documents PDF, etc.).

**Components** 
- Ce répertoire contiendra les composants de notre application. Si vous ne savez pas encore ce que sont les composants, ne vous inquiétez pas. Je traiterai ce sujet dans le prochain chapitre !

**main.js** 
- C'est ici que sont définies les options de configuration plus high-level de Vue. Ce fichier peut sembler légèrement différent de ce à quoi nous sommes habitués, mais l'instanciation d'une nouvelle application Vue devrait ressembler à ce que nous avons fait précédemment.