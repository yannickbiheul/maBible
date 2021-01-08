# Sécurité en PHP : NE JAMAIS FAIRE CONFIANCE À L'UTILISATEUR !!!

## Vérifier que des données soient bien présentes
```
if (isset($_GET['prenom']) && isset($_GET['nom'])) {
    $nom = $_GET['nom'];
     $prenom = $_GET['prenom'];

    echo '<h1>Bonjour ' . $prenom . ' ' . $nom . ' !';
} else {
    echo '<h1>Y\'a rien dans les paramètres, faut pas essayer de m\'arnaquer !</h1>';
}
```

## Empêcher la réception de données contenant de l'HTML ou autres
```
if (isset($_GET['prenom']) && isset($_GET['nom'])) {
    $nom = htmlspecialchars($_GET['nom']);
    $prenom = htmlspecialchars($_GET['prenom']);

    echo '<h1>Bonjour ' . $prenom . ' ' . $nom . ' !';
} else {
    echo '<h1>Y\'a rien dans les paramètres, faut pas essayer de m\'arnaquer !</h1>';
}
```

## Recevoir un nombre entier
```
$_GET['repeter'] = (int) $_GET['repeter'];
```
Si "repeter" est un nombre entier, rien ne change.

Si c'est une chaine de caractères, elle est transformée en nombre entier.