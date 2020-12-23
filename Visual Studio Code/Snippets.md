# Les snippets
Roue dentée en bas à gauche => Extraits de code de l'utilisateur.

Ajouter les snippets après l'accolade fermante sous '"description": "Log output to console"'
```
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

## Snippets HTML
```
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
		"\t<link rel='stylesheet' href='css/$3.css'>",
		"\t<!-- GOOGLE FONTS -->",
		"\t<link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>",
		"\t<!-- jQuery -->",
		"\t<script src=\"https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js\"></script>",
		"\t<!-- JAVASCRIPT -->",
		"\t<script src='js/$4.js' defer></script>",
		"</head>",
		"",
		"<body>",
		"",
		"",
		"</body>",
		"</html>",
	]
}
```

## Snippets CSS
```
"MyCss": {
	"prefix": "mc",
	"body": [
		"* {",
		"\tmargin: 0;",
		"\tpadding: 0;",
		"\tbox-sizing: border-box;",
		"\tfont-family: 'Roboto', sans-serif;",
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
}
```

## Snippets PHP
```
"varDump": {
	"prefix": "vd",
	"body": [
		"var_dump($1); die();"
	]
}
```
