# FETCH

```php
<?php

function debug($variable) {
    echo '<pre>';
    print_r($variable);
    echo '</pre>';
}

$db = new PDO('mysql:host=localhost; dbname=fruits', 'root', '');

$requete = $db->prepare('SELECT * FROM fruit');
$requete->execute();
$resultFetch = $requete->fetch(PDO::FETCH_ASSOC);
echo 'FETCH_ASSOC';
debug($resultFetch); 
👇
Array
(
    [id] => 1
    [nom] => fraise
    [couleur] => rouge
)

$requete = $db->prepare('SELECT * FROM fruit');
$requete->execute();
$resultFetch = $requete->fetch(PDO::FETCH_BOTH);
echo 'FETCH_BOTH';
debug($resultFetch);
👇
Array
(
    [id] => 1
    [0] => 1
    [nom] => fraise
    [1] => fraise
    [couleur] => rouge
    [2] => rouge
)

$requete = $db->prepare('SELECT * FROM fruit');
$requete->execute();
$resultFetch = $requete->fetch(PDO::FETCH_LAZY);
echo 'FETCH_LAZY';
debug($resultFetch);
👇
PDORow Object
(
    [queryString] => SELECT * FROM fruit
    [id] => 1
    [nom] => fraise
    [couleur] => rouge
)

$requete = $db->prepare('SELECT * FROM fruit');
$requete->execute();
$resultFetch = $requete->fetch(PDO::FETCH_OBJ);
echo 'FETCH_OBJ';
debug($resultFetch);
👇
stdClass Object
(
    [id] => 1
    [nom] => fraise
    [couleur] => rouge
)
```