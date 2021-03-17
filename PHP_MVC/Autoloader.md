# Autoloader

Pour charger automatiquement les controllers
```php
function loadController($className) {
    require('controllers/' . $className . '.php');
}
spl_autoload_register('loadController');
```
La fonction "loadController" est enregistrée dans la pile d'autoload.

Dès qu'on va charger une classe inconnue dans l'index, PHP va chercher cette classe dans la pile d'autoload, 

en la donnant comme paramètre à la fonction "loadController".