# MySQL en ligne de commande

### Connexion
```
mysql -h localhost -u root -p
```
Pour le localhost, le mot de passe est vide.
```
Enter password:
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 8
Server version: 10.4.8-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.
```
quit ou exit pour quitter.

**Hello World**
```
MariaDB [(none)]> SELECT 'Hello World !';
+---------------+
| Hello World ! |
+---------------+
| Hello World ! |
+---------------+
1 row in set (0.000 sec)
```

Création d'un nouvel utilisateur
```
MariaDB [(none)]> CREATE USER 'yannick'@'localhost' IDENTIFIED BY '1234';
Query OK, 0 rows affected (0.007 sec)

MariaDB [(none)]> GRANT ALL PRIVILEGES ON elevage.* TO 'yannick'@'localhost';
Query OK, 0 rows affected (0.005 sec)
```
elevage est la table créée pendant le cours.

Connexion avec ce compte
```
C:\Users\yanni>mysql -u yannick -p
Enter password: ****
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 10
Server version: 10.4.8-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]>
```

Définir l'encodage
```
MariaDB [(none)]> SET NAMES 'utf8';
Query OK, 0 rows affected (0.000 sec)
```
Pour définir directement l'encodage pendant la connexion
```
mysql -u yannick -p --default-character-set=utf8;
```

