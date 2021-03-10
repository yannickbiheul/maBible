# Snippets

## Connect DB
```php
"ConnectDB": {
    "prefix": "pdo",
    "body": [
        "// Connexion base de données",
        "\\$host = '';",
        "\\$dbName = '';",
        "\\$user = '';",
        "\\$password = '';",
        "",
        "try {",
        "\t\\$db = new PDO(\"mysql:host=\\$host; dbname=\\$dbName\", \\$user, \\$password);",
        "\t\\$db->exec('SET CHARACTER SET utf8');",
        "} catch(PDOException \\$e) {",
        "\techo 'Problème à la connexion : ' . \\$e->getMessage();",
        "}"
    ]
}
```