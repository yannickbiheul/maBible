# Mon SQL

## Connexion depuis le terminal de commande
```
mysql -u yannick -p --default-character-set=utf8
```
Mot de passe : mot_de_passe

Se connecter à la base "elevage"
```
mysql -u yannick -p elevage --default-character-set=utf8
```

## Création d'une table Animal
```sql
CREATE TABLE Animal (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    espece VARCHAR(40) NOT NULL,
    sexe CHAR(1),
    date_naissance DATETIME NOT NULL,
    nom VARCHAR(30),
    commentaires TEXT,
    PRIMARY KEY (id)
)
ENGINE=INNODB;
```
Voir les tables :
```sql
SHOW TABLES;
```
Voir les colonnes de la table Animal :
```sql
DESCRIBE Animal;
```

## Modifier une table
```sql
ALTER TABLE nom_table ADD ... -- permet d'ajouter quelque chose (une colonne par exemple)

ALTER TABLE nom_table DROP ... -- permet de retirer quelque chose 

ALTER TABLE nom_table CHANGE ...
ALTER TABLE nom_table MODIFY ... -- permettent de modifier une colonne
```

```sql
ALTER TABLE Test_tuto 
CHANGE prenom nom VARCHAR(30) NOT NULL; -- Changement du type + changement du nom

ALTER TABLE Test_tuto 
CHANGE id id BIGINT NOT NULL; -- Changement du type sans renommer

ALTER TABLE Test_tuto
MODIFY id BIGINT NOT NULL AUTO_INCREMENT; -- Ajout de l'auto-incrémentation

ALTER TABLE Test_tuto 
MODIFY nom VARCHAR(30) NOT NULL DEFAULT 'Blabla'; -- Changement de la description (même type mais ajout d'une valeur par défaut)
```

## Insérer des données

**Sans préciser les colonnes**
```sql
INSERT INTO Animal 
VALUES (1, 'chien', 'M', '2010-04-05 13:43:00', 'Rox', 'Mordille beaucoup');
```
```sql
INSERT INTO Animal 
VALUES (2, 'chat', NULL, '2010-03-24 02:23:00', 'Roucky', NULL);
```
```sql
INSERT INTO Animal 
VALUES (NULL , 'chat', 'F', '2010-09-13 15:02:00', 'Schtroumpfette', NULL);
```
MySQL va calculer l'id tout seul grâce à l'auto-incrémentation.

**En précisant les colonnes**
```sql
INSERT INTO Animal (espece, sexe, date_naissance) 
    VALUES ('tortue', 'F', '2009-08-03 05:12:00');
INSERT INTO Animal (nom, commentaires, date_naissance, espece) 
    VALUES ('Choupi', 'Né sans oreille gauche', '2010-10-03 16:44:00', 'chat');
INSERT INTO Animal (espece, date_naissance, commentaires, nom, sexe) 
    VALUES ('tortue', '2009-06-13 08:17:00', 'Carapace bizarre', 'Bobosse', 'F');
```

**Insertion multiple**
```sql
INSERT INTO Animal (espece, sexe, date_naissance, nom) 
VALUES ('chien', 'F', '2008-12-06 05:18:00', 'Caroline'),
        ('chat', 'M', '2008-09-11 15:38:00', 'Bagherra'),
        ('tortue', NULL, '2010-08-23 05:18:00', NULL);
```

**Syntaxe alternative**
```sql
INSERT INTO Animal 
SET nom='Bobo', espece='chien', sexe='M', date_naissance='2010-07-21 15:41:00';
```
- Ne fonctionne qu'avec MySQL.
- Ne permet pas d'insertion multiple.

**À partir d'un fichier .sql**
```sql
SOURCE C:/Users/yanni/Documents/remplissageAnimal.sql;
```

**À partir d'un fichier .csv**
```sql
LOAD DATA LOCAL INFILE 'C:/Users/yanni/Documents/animal.csv'
INTO TABLE Animal
FIELDS TERMINATED BY ';' ENCLOSED BY '"'
LINES TERMINATED BY '\n' -- ou '\r\n' selon l'ordinateur et le programme utilisés pour créer le fichier
(espece, sexe, date_naissance, nom, commentaires);
```

## Sélections

**Éliminer les doublons**
```sql
SELECT DISTINCT espece FROM Animal;
```
Renvoie une seule ligne de chaque espèce.

**Utiliser un OFFSET avec LIMIT**
```sql
SELECT * FROM Animal ORDER BY id LIMIT 6 OFFSET 0;
```
Renvoie les 6 premiers résultats à partir de la ligne 0.
```sql
SELECT * FROM Animal ORDER BY id LIMIT 6 OFFSET 3;
```
Renvoie les 6 premiers résultats à partir de la ligne 3. 

**Opérateur LIKE**
- "%" représente 0 ou plusieurs caractères.
- "_" représente un seul caractère.
```sql
SELECT * FROM Animal WHERE nom LIKE '%a%';
```
Renvoie tous les noms qui contiennent la lettre "a".
```sql
SELECT * FROM Animal WHERE nom LIKE 'a%';
```
Renvoie tous les noms qui commencent par la lettre "a".
```sql
SELECT * FROM Animal WHERE nom LIKE 'b_';
```
Renvoie tous les noms de 2 caractères qui commencent par la lettre "b".

**Opérateur BETWEEN**
```sql
SELECT * 
FROM Animal 
WHERE date_naissance BETWEEN '2008-01-05' AND '2009-03-23';
```

**Opérateur IN**
```sql
SELECT * 
FROM Animal 
WHERE nom IN ('Moka', 'Bilba', 'Tortilla', 'Balou', 'Dana', 'Redbul', 'Gingko');
```
Renvoie tous les animaux dont les noms sont 'Moka', 'Bilba', 'Tortilla', 'Balou', 'Dana', 'Redbul', et 'Gingko'.

## Sauvegarder base de données
```
mysqldump -u yannick -p --opt elevage > C:/Users/yanni/Documents/elevage_sauvegarde.sql
```

## Recréer la base de données
Une fois connecté à MySQL
```sql
CREATE DATABASE elevage;
```
```sql
elevage < C:/Users/yanni/Documents/elevage_sauvegarde.sql
```

## Modifications
```sql
UPDATE Animal 
SET sexe='F', nom='Pataude' 
WHERE id=20;
```

