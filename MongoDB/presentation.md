# MongoDB

Base de données nosql et Schema less, en JSON.

Autres bdd nosql :

- mongoDB, 
- couchDB, 
- elasticsearch, 
- cassandra, 
- etc...

Nom de bdd (comme en sql)

Dans la BDD :

- Collections


## Installation

[mongodb](https://www.mongodb.com/try/download/community)

## Documentation

[Docs.mongodb.com](https://docs.mongodb.com/)

### Adresse de mongodb :

```C:\Program Files\MongoDB\Server\4.4\bin```

### Lancer le serveur (demon) :

```mongod```

### Lancer mongo :

```mongo```

### Voir les bases de données :

```show dbs```

Les bases de données seront enregistrées dans le dossier data.

### Créer bdd "dwwm":

```use dwwm```

### Créer une collection :

```db.createCollection('animaux')```

( réponse : {"ok" : 1 } )

### Insérer un animal :

```db.animaux.insert({name: "Horny", weight: 600, gender: "m"});```

(réponse : WriteResult({ "nInserted" : 1 }))

On peut ajouter un autre attribut :

```db.animaux.insert({name: "Ayna", weight: 733, gender: "f", vampires: 40});```

### Voir la collection :

```db.animaux.find()```

### Faire une recherche précise :

```db.animaux.find({weight: {$gt: 600}})```

gt: greater than

```db.animaux.find({gender: {$ne: "f"}})```

ne: not egual

```db.animaux.find({vampires: {$exists: true}})```

### Mettre à jour

```db.animaux.update({name: "Ayna"}, {$set: {weight: 1000}})```

```db.animaux.updateMany({gender: "m"}, {$set: {weight: 300}});```

## Importer un fichier json

```mongoimport --db dwwm --collection unicorns unicorns.json```

