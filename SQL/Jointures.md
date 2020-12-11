# Les jointures

Base de données garage2

Sélectionner tout
```
SELECT * FROM voiture, marque WHERE voiture.idmarque = marque.id 
```
Sélectionner des colonnes précises
```
SELECT marque.marque, voiture.carburant, voiture.puissance FROM voiture, marque WHERE voiture.idmarque = marque.id 
```

## Utilisation des alias (AS)
```
SELECT m.marque, v.carburant, v.puissance FROM voiture AS v, marque AS m WHERE v.idmarque = m.id 
```

## Création d'une FOREIGN KEY
```
ALTER TABLE `voiture` ADD CONSTRAINT `marque` FOREIGN KEY (`idmarque`) REFERENCES `marque`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
```

Ajout d'une foreign key sur la table carburant
```
ALTER TABLE `voiture` ADD CONSTRAINT `carburant` FOREIGN KEY (`idcarburant`) REFERENCES `carburant`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
```
## Fonction INNER

Avant :
```
SELECT * FROM voiture, marque WHERE marque.id = voiture.idmarque;
```

Après :
```
SELECT * FROM voiture INNER JOIN marque ON marque.id = voiture.idmarque;
```



