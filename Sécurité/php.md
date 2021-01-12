# Sécurité en PHP : NE JAMAIS FAIRE CONFIANCE À L'UTILISATEUR !!!

## Vérifier que des données soient bien présentes : isset()
```
if (isset($_GET['prenom']) && isset($_GET['nom'])) {
    $nom = $_GET['nom'];
     $prenom = $_GET['prenom'];

    echo '<h1>Bonjour ' . $prenom . ' ' . $nom . ' !';
} else {
    echo '<h1>Y\'a rien dans les paramètres, faut pas essayer de m\'arnaquer !</h1>';
}
```

## Échapper les balises HTML pour qu'elles ne soient pas interprétées : htmlspecialchars()
```
if (isset($_GET['prenom']) && isset($_GET['nom'])) {
    $nom = htmlspecialchars($_GET['nom']);
    $prenom = htmlspecialchars($_GET['prenom']);

    echo '<h1>Bonjour ' . $prenom . ' ' . $nom . ' !';
} else {
    echo '<h1>Y\'a rien dans les paramètres, faut pas essayer de m\'arnaquer !</h1>';
}
```

## Supprimer les balises HTML entrées dans le formulaire : strip_tags()
```
if (isset($_GET['prenom']) && isset($_GET['nom'])) {
    $nom = strip_tags($_GET['nom']);
    $prenom = strip_tags($_GET['prenom']);

    echo '<h1>Bonjour ' . $prenom . ' ' . $nom . ' !';
} else {
    echo '<h1>Y\'a rien dans les paramètres, faut pas essayer de m\'arnaquer !</h1>';
}
```

## Recevoir un nombre entier : int
```
$_GET['repeter'] = (int) $_GET['repeter'];
```
Si "repeter" est un nombre entier, rien ne change.

Si c'est une chaine de caractères, elle est transformée en nombre entier.