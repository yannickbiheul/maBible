# createServer()

## Version 1

```js
let http = require('http');

let server = http.createServer() 

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

[Documentation](https://devdocs.io/node~12_lts/http#http_http_createserver_options_requestlistener)