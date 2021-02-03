# createServer()

## Version 1

```js
// http est un module de node.js
let http = require('http');

let server = http.createServer() 

// Comme les eventListener en javascript, on écoute l'évènement request et on applique une fonction
server.on('request', function(request, response) {
    response.writeHead(200, {
        'Content-Type': 'text/html; charset=utf-8'
    });
    response.end('Salut comment ça va ?!');
})

server.listen(8081);
```

## Version 2

```js
let http = require('http');

http.createServer(function(request, response) {
    response.writeHead(200, {
        'Content-Type': 'text/html; charset=utf-8'
    });
    response.end('Salut comment ça va ?!');
}).listen(8081)
```

[http.createServer](https://devdocs.io/node~12_lts/http#http_http_createserver_options_requestlistener)

[http.severResponse](https://devdocs.io/node~12_lts/http#http_class_http_serverresponse)