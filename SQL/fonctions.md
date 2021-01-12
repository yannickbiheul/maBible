# Fonctions SQL

### AVG()
Calcule la moyenne d'un champ contenant des nombres.
```
SELECT AVG(prix) AS prix_moyen FROM jeux_video
```

### COUNT()
Compter le nombre d'entrées.
```
SELECT COUNT(*) AS nbjeux FROM jeux_video 
```

### CURDATE() et CURTIME()
Retournent respectivement uniquement la date (AAAA-MM-JJ) et l'heure (HH:MM:SS).

### DATE_ADD() et DATE_SUB()
Ajouter ou soustraire des dates.

Par exemple, supposons que l'on souhaite afficher une date d'expiration du message. Celle-ci correspond à « la date où a été posté le message + 15 jours ». Voici comment écrire la requête :
```
SELECT pseudo, message, DATE_ADD(date, INTERVAL 15 DAY) AS date_expiration FROM minichat
```

### DATE_FORMAT()
Formater une date.
```
SELECT pseudo, message, DATE_FORMAT(date, "%d/%m/%Y %Hh%imin%ss") AS date FROM minichat
```
Les symboles %d  , %m  , %Y  , etc., sont remplacés par le jour, le mois, l'année, etc. Les autres symboles et lettres sont affichés tels quels.

Attention aux guillemets.

### DAY(), MONTH(), YEAR()
Extraire le jour, le mois ou l'année.
```
SELECT pseudo, message, DAY(date) AS jour FROM minichat
```

### HOUR(), MINUTE(), SECOND()
Extraire les heures, minutes, secondes.
```
SELECT pseudo, message, HOUR(date) AS heure FROM minichat
```

### LENGTH()
Compter le nombre de caractères.
```
SELECT LENGTH(nom) AS longueur_nom FROM jeux_video
```

### LOWER()
Convertir l'intégralité d'un champ en minuscules.
```
SELECT LOWER(nom) AS nom_min FROM jeux_video
```

### MAX() 
Retourner la valeur maximale.
```
SELECT MAX(prix) AS prix_max FROM jeux_video
```

### MIN()
Retourner la valeur minimale.
```
SELECT MIN(prix) AS prix_min FROM jeux_video
```

### NOW()
Obtenir la date et l'heure actuelles.
```
INSERT INTO minichat(pseudo, message, date) VALUES('Mateo', 'Message !', NOW())
```

### ROUND()
Arrondir un nombre décimal.
```
SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux_video
```

### SUM()
Additionner les valeurs.
```
SELECT SUM(prix) AS prix_total FROM jeux_video WHERE possesseur='Patrick'
```

### UPPER()
Convertir l'intégralité d'un champ en majuscules.
```
SELECT UPPER(nom) AS nom_maj FROM jeux_video
```

[Liste fonctions mathématiques](https://dev.mysql.com/doc/refman/8.0/en/numeric-functions.html)

[Liste fonctions sur les chaines de caractères](https://dev.mysql.com/doc/refman/8.0/en/string-functions.html)

[Liste fonctions de gestion des dates](https://dev.mysql.com/doc/refman/5.7/en/date-and-time-functions.html)