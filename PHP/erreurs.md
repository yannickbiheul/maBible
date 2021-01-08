# Erreurs PHP

## Headers already sent by…

Les headers sont des informations d'en-tête qui sont envoyées avant toute chose au navigateur du visiteur. Elles permettent de dire « Ce que tu vas recevoir est une page HTML », ou « Ce que tu vas recevoir est une image PNG », ou encore « Inscris un cookie ».
Toutes ces choses-là doivent être effectuées avant que le moindre code HTML ne soit envoyé. En PHP, la fonction qui permet d'envoyer des informations de headers s'appelle header()  . Nous nous en servirons notamment dans le chapitre sur la création d'images en PHP, pour indiquer que l'on envoie une image, et non pas une page HTML.

Il y a d'autres fonctions qui envoient des headers toutes seules. C'est le cas de session_start()  et de setcookie().

Ce que vous devez retenir, c'est que chacune de ces fonctions doit être utilisée au tout début de votre code PHP. Il ne faut RIEN mettre avant, sinon ça provoquera l'erreur « Headers already sent by… ».

## L'image contient des erreurs

C'est le navigateur qui vous donne ce message d'erreur, et non pas PHP.
Ce message survient lorsque vous travaillez avec la bibliothèque GD. Si vous avez fait une erreur dans votre code (par exemple une banale « parse error »), cette erreur sera inscrite dans l'image. Du coup, l'image ne sera pas valide et le navigateur ne pourra pas l'afficher.

Supprimer la ligne suivante dans le code :
```
<?php header ("Content-type: image/png"); ?>
```
L'erreur apparaîtra à la place du message « L'image contient des erreurs ».

Vous pouvez aussi afficher le code source de l'image (comme si vous alliez regarder la source HTML de la page, sauf que là, il s'agit d'une image).

## Maximum execution time exceeded

Boucle infinie.

Heureusement, PHP limite le temps d'exécution d'une page PHP à 30 secondes par défaut. Si une page met plus de 30 secondes à se générer, PHP arrête tout en signalant que c'est trop long. Et il fait bien, parce que sinon cela pourrait ralentir tout le serveur et rendre votre site inaccessible !

## Parse error

Erreur de syntaxe.

## Undefined function

Là, il faut comprendre que vous avez utilisé une fonction qui n'existe pas.

Deux possibilités :

- soit la fonction n'existe vraiment pas. Vous avez probablement fait une faute de frappe, vérifiez si une fonction à l'orthographe similaire existe ;
- soit la fonction existe vraiment, mais PHP ne la reconnaît pas. C'est parce que cette fonction se trouve dans une extension de PHP que vous n'avez pas activée. Par exemple, si vous essayez d'utiliser la fonction imagepng  alors que vous n'avez pas activé la bibliothèque nécessaire pour les images en PHP, on vous dira que la fonction n'existe pas. Activez la bibliothèque qui utilise la fonction, et tout sera réglé.

Une dernière chose : il se peut aussi que vous essayiez d'utiliser une fonction qui n'est pas disponible dans la version de PHP que vous avez.
Vérifiez dans le manuel dans quelles versions de PHP cette fonction est disponible.

## Wrong parameter count

Cela signifie que vous avez oublié des paramètres pour la fonction, ou même que vous en avez trop mis. S'il s'agit d'une fonction fournie par PHP, rendez-vous sur la documentation et consultez le mode d'emploi de la fonction pour savoir combien de paramètres elle prend, et quels sont ceux qui sont facultatifs.

