# Programme Formation DWWM

## Semaine 45
> C
- Algorithmie

## Semaine 46
> C
- Algorithmie
> HTML / CSS
- Les bases
- Float et positions
- Application agence de voyages
- Slider
- Site e-commerce
- Parcours json / objets + insertion jquery
- Récupération des attributs en jquery
- Horloge
- Accéder à un objet

## Semaine 47
> HTML / CSS
- CV

## Semaine 48
> JavaScript / jQuery
- Slider
- Site e-commerce
- Récupération de données json
- Menu Burger
- Horloge

> CSS
- FlexBox
- Media queries
- Grid
- Bootstrap

## Semaine 49
> Java
- Programmation orienté objets;
- Héritage;
- Polymorphisme;
- Composition / Agrégation;
- Interface;
- Try/catch;

## Semaine 50
> Java
Design Pattern 
- Design Pattern 1 : Modèle Vue Contrôleur (MVC)
- Dossier mvc dans visual studio code DWWM.
- Design Pattern 2 : Mediator
- Dosier mediator dans visual studio code DWWM.
- Design Pattern 3 : Observer

> Protocoles réseaux

CMD :
- ipconfig /all : pour connaitre son adresse ip.
- ping "www.site.com" : pour envoyer un ping au site.
- tracert "site" : pour "tracer" la route qui mène au site.

> PHP
- Tous les identificateurs comencent par "$".
- Tableau : $tableau = [1, 2, 3] . $tableau[0] = 1.
- Caster les variables : $a = (integer) "10" => deviendra un entier.
- Constante : define("ma_constante", "Salut !");
- Concaténation : "Bonjour" . "Marcel";
- Concaténation avec variables : $a = "chaine", $b = "Voici $a";
- "echo" permet d'envoyer du texte au navigateur.
- Afficher valeur des variables : var_dump();
- foreach pour parcourir les tableaux associatifs.
- Récupération des données d'un formulaire avec les méthodes GET et POST.
- Exercice : formulaire questions réponses.
- Fonctions PHP + Lecture de fichier.
- Exercice : recréer le site e-commerce en affichant les données depuis un fichier json avec PHP. 
- Exercices sur les tableaux.
- Formats de dates en PHP.
- Fonction include(fichier), require(fichier), include_once(fichier) et require_once(fichier).
- Fonctions die(message) et exit(message). Envoie un message au navigateur et arrpete le programme.
- Gestion de l'affichage des erreurs : int error_reporting([int level]). Dans php.ini, mettre display_errors à false. Le mettre à true seulement pendant le développement.
- Utiliser la documentation php.net.
- Trier des tableaux.

> phpmyadmin
- Première tentative de connexion.
- Création base de données "garage" sur phpMyAdmin.
- Connexion à la bdd en php.
- Parcourir table voiture avec un foreach.
- Ajouter une voiture en php.
- Exercice : Refaire le site eCommerce en utilisant une base de données.

> SQL
- Requêtes SQL
- Site "sql.sh"
- Commande SELECT
- Commande WHERE
- Opérateurs AND et OR
- Opérateur IN
- Commande BETWEEN (peut ne pas fonctionnner sur d'anciennes versions)
- Opérateur LIKE
- Opérateur IS (IS NULL / IS NOT NULL)
- Commande GROUP BY
- Fonction SUM(nom de colonne) pour calculer la somme d'une colonne
- Fonctions AVG()=>moyenne, COUNT()=>compter, MAX()=>maximum, MIN()=>minimum
- Condition HAVING
- Commande ORDER BY (ASC = ascendant, DESC = descendant)
- Clause LIMIT et OFFSET
- Commande CASE et WHEN (comme un switch)
- Commande UPDATE (SET colonne1 = "nouvelle valeur")
- Commande INSERT INTO
- Instruction ON DUPLICATE KEY UPDATE
- Commande DELETE (utiliser une condition WHERE)
- Exercice : Exercice ville de France sur sql.sh.
	- Créer base de données "villes_test" dans pshpmyadmin.
	- Importer le fichier villes_france.sql dans cette base (176 requêtes).
	- Faire les requêtes SQL directement dans phpmyadmin.
- Exercice : faire une requête sur le site eCommerce qui affiche le prix moyen des produis.


## Semaine 51
> SQL
- View
- Formes normales (1NF, 2NF, 3NF)
- Clé composite
- Boyce-Code
- Trigger
- Importer csv
- Importer base de données avec mysqldump
- Création et importation fichier csv
- Création page web login / mot de passe
- Utilisation de session_start et session_destroy().

> PHP
- Common Getaway Interface
- Templates
- Routage
- ob-start() -> ob = Open Buffer
- ob_get_clean()
- Exercice template.php -> Dossier DWWM_BackEnd/template: 
	- Ajouter menu de navigation
	- Ajouter page à propos
- Design Pattern MVC (Model View Controller)
- CRUD (Create Read Update Delete)
- Exercice : ajouter page "etudiant" au MVC
- Base de données "formation", table "etudiant" :
    - id
    - code
    - nom
    - prenom
    - age
- Ajout de l'action modifier cours

## Semaine 52
> PHP
- Ajout de l'inscription étudiant
- Ajout  de la connexion étudiant
- Relations entre tables dans la basee de données
- Relation 1 à n et relation n à n.
- Merise MCD (Modèle Conceptuel de Données)
- Créer table inscription
    - id
    - id_cours
    - id_etudiant
    - date_inscription
- Formulaire d'inscription d'un étudiant à un cours
- Une fois que l'étudiant est connecté, il peut choisir ses cours
- Merise MLD (Modèle Logique de Données)
- Merise MPD (Modèle Physique de Données)

> jQuery
- Révision sélection et chgt css
- Vu fonction get()


# 2021

## Semaine 2
> Git / GitHub
- Création compte gitHub
- Création repository projetMVC
- 