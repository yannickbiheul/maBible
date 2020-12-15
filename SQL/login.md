# Création d'un Login

## Login / password
créer une table user dans la BDD essaiimport.

Dans la table user: 

- id (clé primaire en Auto-Increment) 
- email
- password

Créer une page php avec 

- lien enregistrer -> 
    - affiche le formulaire login + password  (faire un formulaire en method=POST)
    - insert les données dans la table user
- lien se connecter ->
    - Affiche le formulaire login + password
    - accepte ou pas la connection


## Crypter un password
Exemple de création de mot de passe crypté et vérification :
```
<?php 

// 1) cryptage du mo de passe donné en clair

$password = '121@121';

$password_encrypted = password_hash($password, PASSWORD_BCRYPT);

echo $password_encrypted;

// donne: $2y$10$kBkEonF/wkFxhvvnsACHOOAQTn5BcLTu3IGNqpxwc37DQteXFWP4u

// vérification du mot de passe

// if (password_verify($password_inputted_by_user, $password_encrypted)) {

if (password_verify('121@121', $password_encrypted)) {

    // Success!

    echo 'Password Matches';

} else {

    // Invalid credentials

    echo 'Password Mismatch';

}

?>
```
```
// 1) Cryptage du mot de passe donné en clair
$password = "121@121";
$password_encrypted = password_hash($password, PASSWORD_BCRYPT);

// 2) Vérification
if (password_verify($password_inputted_by_user, $password_encrypted)) {
    // Success !
    echo "Password Matches";
} else {
    // Invalid credentials
    echo "Password Mismatch";
}
```
