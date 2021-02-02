# Les conditions

## Vérification 3 variables identiques
```js
function verif(a, b, c) {
    if (a === b && b === c) {
        console.log("Les trois variables sont identiques");
    } else {
        if (a === b || b === c || a ===c) {
            console.log("Deux des variables sont identiques");
        } else {
            console.log("Les trois variables sont différentes");
        }
    }
}

verif(50, 75, 25);
```

## Transformer une valeur binaire abrégée en sa valeur non abrégée.

Par exemple : 2K = 2048 (2 x 1024).

Avec if :
```js
let quantity = 2;
let unit = "k";
let result;

if (unit === "k") {
    result = quantity *= 2**10;
} else if (unit === "m") {
    result = quantity *= 2**20;
} else if (unit === "g") {
    result = quantity *= 2**30;
} else if (unit === "t") {
    result = quantity *= 2**40;
} else {
    result = false;
}

console.log(result);
```
Avec switch :
```js
let quantity = 2;
let unit = "k";
let result;

switch (unit) {
    case("k"):
        result = quantity*= 2**10;
        break;
    case("m"):
        result = quantity*= 2**20;
        break;
    case("g"):
        result = quantity*= 2**30;
        break;
    case("t"):
        result = quantity*= 2**40;
        break;
    default:
        result = false;
}

console.log(result);
```