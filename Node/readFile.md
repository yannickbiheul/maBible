# readFile()

## readFile()
```js
// Créer un fichier input.txt avec des données
let fs = require("fs");

fs.readFile('input.txt', function(err, data) {
    if (err) {
        console.log(err);
    } else {
        console.log(data.toString());
    }
});

console.log("Fin du programme");
```
Le programme n'attend pas le chargement du fichier et continue son chemin, le console.log apparait avant le fichier.

## readFileSync()
```js
// Créer un fichier input.txt avec des données
let fs = require("fs");

let data = fs.readFileSync('input.txt');
console.log(data.toString());

console.log("Fin du programme");
```
Le programme attend le chargement du fichier avant de continuer.

## Afficher un fichier dans une page web
```js
let fs = require("fs");
let http = require("http");

let data = fs.readFileSync('input.txt');

http.createServer(function(request,response) {
    response.writeHead(200,{ 'Content-Type' : 'text/html; charset=utf-8' });
    response.end(data.toString());
}).listen(8081);
```

## Afficher un fichier html
```js
let http = require("http");
let fs = require("fs");

http.createServer(function(request,response) {
    fs.readFile('index.html', function(err, data) {
        if (err) throw err;
           
        response.writeHead(200,{ 'Content-Type' : 'text/html; charset=utf-8' });
        response.end(data);
    })
    
}).listen(8082);
```