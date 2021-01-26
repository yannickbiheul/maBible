# PHP

## Executer PHP avec XAMPP

Installer Xampp;

Création fichier "index.php" dans le dossier "htdocs" de xampp;

Changement de port dans "Xampp Control Panel", "Apache => Config",  "Apache (httpd.conf)";

Trouver la ligne "Listen 80";

Changer "Listen 80" en "Listen 8090" pour éviter les conflits (avec Skype par exemple), et enregistrer.

Sur le navigateur, taper l'adresse "localhost:8090" pour afficher le fichier.

## Afficher infos PHP
```php
<?php

    phpinfo();

?>
```

## Envoyer un mail avec PHP

**En local** :
>C:\xampp\php\php.ini

CTRL+F, chercher "mail function"
```
[mail function]
; For Win32 only.
; http://php.net/smtp
SMTP=localhost
; http://php.net/smtp-port
smtp_port=25

; For Win32 only.
; http://php.net/sendmail-from
;sendmail_from = me@example.com

; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
; http://php.net/sendmail-path
sendmail_path = "C:\xampp\mailtodisk\mailtodisk.exe"
```
Entrer ces valeurs :
```
[mail function]
; For Win32 only.
; http://php.net/smtp
SMTP=smtp.gmail.com
; http://php.net/smtp-port
smtp_port=587

; For Win32 only.
; http://php.net/sendmail-from
;sendmail_from = yannickbiheul@gmail.com

; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
; http://php.net/sendmail-path
sendmail_path = "C:\xampp\sendmail\sendmail.exe\" -t"
```
**En local / En ligne** :

**Script PHP** :
```php
<?php
  $destinataire = "destinataire@gmail.com";
  $sujet = "Email de test";
  $corps = "Salut ceci est un email de test venant d'un script PHP";
  $headers = "From: yannickbiheul@outlook.fr";
  if (mail($destinataire, $sujet, $corps, $headers)) {
    echo "Email envoyé avec succès à $destinataire ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }
?>
```

## Tableaux
```php
<?php

    echo "<h1>Tableau !!!</h1>";
    $tableau = array("un", "deux", "trois", "quatre");
    var_dump($tableau);

    $tableau2 = array(
        "un" => "motUn",
        "deux" => 2,
        "trois" => "motTrois",
        "quatre" => 45.6,
        "Server" => $_SERVER['SERVER_NAME']
    );

    echo "<pre>";
    var_dump($tableau2);
    echo "</pre>";

    echo "<p>$tableau[0]</p>";

?>
```
$_SERVER permet d'accéder aux "méthodes" du serveur.



## Lire un fichier
```php
<?php

    $fcontents = file("coucou.txt");
    var_dump($fcontents);
    foreach ($fcontents as $line_num => $line) {
        echo "<br>", $line, "<br>";
    }

?>
```

## Parcourir un tableau de mails et l'afficher dans un tableau HTML
```php
<?php

    $email = array (
        "toto" => "toto@univ-lille3.fr",
        "titi" => "titi@wanadoo.fr",
        "tata" => "tata@pareilquetiti.fr",
        "tutu" => "tutu@nulpart.com"
    );

    function LigneMail($id,$ad) {
        echo "<tr>\n";
        echo "<th>$id</th>\n";
        echo "<td><a href='mailto:$ad'>$ad</a></td>\n";
        echo "</tr>\n";
    }

    echo "<TABLE BORDER=1>\n";
    foreach ($email as $nom=>$mail) {
        LigneMail($nom,$mail);
    }
    echo "</TABLE>\n";

?>
```

## Objet en PHP
```php
<?php

    $data = '{
        "name": "Alex",
        "age": "25",
        "address": "Paris",
        "emails": [ "eee@zzz.com", "rr@ee" ]
    }';

    $obj = json_decode($data);
    // var_dump($obj);
    echo gettype($obj);
    echo "<br>";
    echo $obj->name . "<br>";
    echo $obj->age . "<br>";
    echo $obj->emails[0] . "<br>";
    echo $obj->emails[1] . "<br>";
    echo sizeof($obj->emails);

?>
```

### Récupérer des données depuis un fichier json
```php
<?php
$Json = file_get_contents("fichier.json");
// Converts to an array 
$myarray = json_decode($Json, true);
var_dump($myarray); // prints array
?>
```

## Trier des tableaux
```php
<?php

    function dbg($x) {
        echo "<pre>";
        print_r($x);
        echo "</pre>";
    }

    $langages = ["c" =>"Java", "b"=>"PHP", "a"=>"SmallTalk"];
    $systemes = ["w" =>"windows", "x"=>"linux"];

    // Trier le tableau dans l'ordre par clés
    ksort($langages);
    print_r($langages);
    echo "<br>";
    // Trier le tableau dans l'ordre par valeurs
    asort($langages);
    print_r($langages);

    // Affiche les tableaux en propre
    dbg($langages);

    // Affiche les clés
    dbg(array_keys($langages));
    // Affiche les valeurs
    dbg(array_values($langages));

    // Supprimer une variable
    unset($langages['a']);
    print_r($langages);

    echo "<br>";

        // Caster une variable
    $nbr = "5.21";
    echo "<br>";
    echo gettype($nbr);
    echo "<br>";
    $decimal = (float) $nbr;
    echo $decimal;
    echo "<br>";
    echo gettype($decimal);

    // Merger des tableaux
    dbg(array_merge($langages, $systemes));

    // Afficher la taille d'un tableau
    dbg(sizeof($langages));

    // Vérifier qu'une clé existe dans un tableau
    if (array_key_exists("w", $systemes)) {
        echo "La clé w existe !";
    } else {
        echo "La clé w n'existe pas !";
    }

?>
```