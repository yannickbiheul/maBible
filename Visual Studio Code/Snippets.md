# Les snippets
Roue dentée en bas à gauche => Extraits de code de l'utilisateur.

Ajouter les snippets après l'accolade fermante sous '"description": "Log output to console"'
```json
{
	// Place your snippets for html here. Each snippet is defined under a snippet name and has a prefix, body and 
	// description. The prefix is what is used to trigger the snippet and the body will be expanded and inserted. Possible variables are:
	// $1, $2 for tab stops, $0 for the final cursor position, and ${1:label}, ${2:another} for placeholders. Placeholders with the 
	// same ids are connected.
	// Example:
	// "Print to console": {
	// 	"prefix": "log",
	// 	"body": [
	// 		"console.log('$1');",
	// 		"$2"
	// 	],
	// 	"description": "Log output to console"
	// }
```

## Snippet HTML
```json
"MyDoctype": {
    "prefix": "md",
    "body": [
        "<!DOCTYPE html>",
        "<html lang='fr'>",
        "<head>",
        "\t<meta charset='UTF-8'>",
        "\t<meta name='viewport' content='width=device-width, initial-scale=1.0'>",
        "\t<title>$1</title>",
        "\t<!-- DESCRIPTION -->",
        "\t<meta name='description' content='$2'>",
        "\t<!-- CSS -->",
        "\t<link rel='stylesheet' href='css/main.css'>",
        "\t<!-- GOOGLE FONTS -->",
        "\t<!-- Roboto -->",
        "\t<link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>",
        "\t<!-- Quicksand -->",
        "\t<link rel='preconnect' href='https://fonts.gstatic.com'>",
        "\t<link href='https://fonts.googleapis.com/css2?family=Quicksand&display=swap' rel='stylesheet'>",
        "\t<!-- Bangers -->",
        "\t<link rel='preconnect' href='https://fonts.gstatic.com'>",
        "\t<link href='https://fonts.googleapis.com/css2?family=Bangers&display=swap' rel='stylesheet'>",
        "\t<!-- FONTAWESOME -->",
        "\t<script src='https://kit.fontawesome.com/29ef46100e.js' crossorigin='anonymous'></script>",
        "\t<!-- jQuery -->",
        "\t<script src=\"https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js\"></script>",
        "</head>",
        "",
        "<body>",
        "",
        "\t$3",
        "",
        "\t<!-- JAVASCRIPT -->",
        "\t<script src='js/main.js'></script>",
        "</body>",
        "</html>",
    ]
}
```

## Snippet Bootstrap
```json
"Bootstrap": {
    "prefix": "btsp",
    "body": [
        "<!DOCTYPE html>",
        "<html lang='fr'>",
        "<head>",
        "\t<meta charset='UTF-8'>",
        "\t<meta name='viewport' content='width=device-width, initial-scale=1.0'>",
        "\t<title>$1</title>",
        "\t<!-- DESCRIPTION -->",
        "\t<meta name='description' content='$2'>",
        "\t<!-- CSS -->",
        "\t<link rel='stylesheet' href='css/main.css'>",
        "\t<!-- GOOGLE FONTS -->",
        "\t<!-- Roboto -->",
        "\t<link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>",
        "\t<!-- Quicksand -->",
        "\t<link rel='preconnect' href='https://fonts.gstatic.com'>",
        "\t<link href='https://fonts.googleapis.com/css2?family=Quicksand&display=swap' rel='stylesheet'>",
        "\t<!-- Bangers -->",
        "\t<link rel='preconnect' href='https://fonts.gstatic.com'>",
        "\t<link href='https://fonts.googleapis.com/css2?family=Bangers&display=swap' rel='stylesheet'>",
        "\t<!-- FONTAWESOME -->",
        "\t<script src='https://kit.fontawesome.com/29ef46100e.js' crossorigin='anonymous'></script>",
        "\t<!-- jQuery -->",
        "\t<script src=\"https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js\"></script>",
        "\t<!-- BOOTSTRAP -->",
        "\t<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>",
        "</head>",
        "",
        "<body>",
        "",
        "\t$3",
        "",
        "\t<!-- JAVASCRIPT -->",
        "\t<script src='js/main.js'></script>",
        "\t<!-- BOOTSTRAP -->",
        "\t<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>",
        "</body>",
        "</html>",
    ]
}
```

## Snippets CSS
```json
"MyCss": {
    "prefix": "mc",
    "body": [
        ":root {",
        "\t--blue: #3498db;",
        "\t--blue2: #2980b9;",
        "\t--green: #2ecc71;",
        "\t--green2: #27ae60;",
        "\t--red: #e74c3c;",
        "\t--red2: #c0392b;",
        "\t--quicksand: 'Quicksand', sans-serif;",
        "\t--bangers: 'bangers', sans-serif;",
        "}",
        "",
        "* {",
        "\tmargin: 0;",
        "\tpadding: 0;",
        "\tbox-sizing: border-box;",
        "\tfont-family: 'Roboto', sans-serif;",
        "}",
        "",
        "body {",
        "\twidth: 100%;",
        "\tmin-height: 100vh;",
        "\tdisplay: flex;",
        "\tflex-direction: column;",
        "\tjustify-content: center;",
        "\talign-items: center;",
        "}"
    ]
},
"FlexRowCenter": {
		"prefix": "frc",
	"body": [
		"display: flex;",
		"justify-content: center;",
		"align-items: center;"
	]
},
"FlexColumnCenter": {
	"prefix": "fcc",
	"body": [
		"display: flex;",
		"flex-direction: column;",
		"justify-content: center;",
		"align-items: center;"
	]
},
"BackGroundLinearGradient": {
	"prefix": "bglg",
	"body": [
		"background: linear-gradient(45deg, rgba(0, 0, 0, 0.5)50%, rgba(0, 0, 0, 0.5)50%);",
		"background-size: cover;",
		"background-position: center"
	]
}
```

## Snippets PHP
```json
"varDump": {
	"prefix": "vd",
	"body": [
		"var_dump($1); die();"
	]
}
```
