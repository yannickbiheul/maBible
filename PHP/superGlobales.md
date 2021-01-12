# Variables SuperGlobales

### $_COOKIE

Contient les valeurs des cookies enregistrés sur l'ordinateur du visiteur. Cela nous permet de stocker des informations sur l'ordinateur du visiteur pendant plusieurs mois, pour se souvenir de son nom, par exemple.

### $_ENV

Ce sont des variables d'environnement toujours données par le serveur. C'est le plus souvent sous des serveurs Linux que l'on retrouve des informations dans cette superglobale. Généralement, on ne trouvera rien de bien utile là-dedans pour notre site web.

### $_FILES

Contient la liste des fichiers qui ont été envoyés via un formulaire.

### $_GET

Elle contient les données envoyées en paramètres dans l'URL.

### $_POST

Contient les informations qui viennent d'être envoyées par un formulaire.

### $_SERVER

Ce sont des valeurs renvoyées par le serveur.

$_SERVER['REMOTE_ADDR'] nous donne l'adresse IP du client qui a demandé à voir la page, ce qui peut être utile pour l'identifier.

### $_SESSION

On y retrouve les variables de session. Ce sont des variables qui restent stockées sur le serveur le temps de la présence d'un visiteur.


