# Exercices base de données villes_test

### Table 1 : villes_france_free
Colonnes :
- ville_id | ville_departement | ville_slug | ville_nom | ville_nom_simple | ville_nom_reel | ville_nom_soundex | ville_nom_metaphone |
- ville_code_postal | ville_commune | ville_code_commune | ville_arrondissement | ville_canton | ville_amdi |
- ville_population_2010 | ville_population_1999 | ville_population_2012 | ville_densite_2010 | ville_surface |
- ville_longitude_deg | ville_lattitude_deg | ville_longitude_grd | ville_lattitude_grd | ville_longitude_dms | ville_lattitude_dms | ville_zmin | ville_zmax |

### Table 2 : departement
Colonnes :
- departement_id | departement_code | departement_nom | departement_nom_uppercase | departement_slug | departement_nom_soundex |

#### 1- Obtenir la liste des 10 villes les plus peuplées en 2012
```
SELECT ville_nom, ville_population_2012 FROM villes_france_free ORDER BY ville_population_2012 DESC
```

#### 2- Obtenir la liste des 50 villes ayant la plus faible superficie
```
SELECT ville_nom, ville_surface FROM villes_france_free ORDER BY ville_surface DESC LIMIT 50
```

#### 3- Obtenir la liste des départements d’outres-mer, c’est-à-dire ceux dont le numéro de département commencent par “97”
```
SELECT ville_nom, ville_departement FROM villes_france_free WHERE ville_departement >= 97
```

#### 4- Obtenir le nom des 10 villes les plus peuplées en 2012, ainsi que le nom du département associé
```
SELECT ville_nom, ville_departement, ville_population_2012 FROM villes_france_free ORDER BY ville_population_2012 DESC LIMIT 10
```