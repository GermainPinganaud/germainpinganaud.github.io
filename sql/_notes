# SGBD
*Système de gestion de base de données*

## Hiérarchie
1. DB
2. TABLES
3. COLONNES
4. DONNEES

###### Syntaxe
* "Language" en majuscule
* "Eléments" entre back ticks
* "Données" entre entre simples quotes

## SCRUD
* SEARCH/SELECT *pour afficher plusieurs résultats dans un tableau*
* CREATE/INSERT
* READ/SELECT *récupérer un élément*
* UPDATE *modifier*
* DELETE
____

## Commandes
Pour initier l'administration :
`mysql -uroot -p0000`
-u pour user et -p pour password
A partir d'ici, chaqua commande doit être ponctuée d'un ";".
Tout d'abord :
```SQL
USE `nom_de_la_db`;
```
pour définir sur quel base de données on travail.
#### SEARCH/SELECT
Affiche plusieurs résultats dans un tableau.

#### CREATE/INSERT
```SQL
CREATE TABLE `animals` (
  -> `id` INT(5)
  -> );
```
Créer une table avec une colonne : id
```SQL
INSERT INTO `animals` VALUES (NULL, 'canin');
```
Insérer une colonne animal dans la table.

#### READ/SELECT
```SQL
SELECT * FROM `users`;
```
Selectionne toutes les colonnes dans la table "users"
```SQL
SELECT `id`, `race` FROM `animals`;
+----+-------+
| id | race  |
+----+-------+
|  1 | canin |
+----+-------+```
Selectionne les colonnes "id" et "race" dans la table "users"

#### UPDATE
Pour modifier un élément.
#### DELETE
Pour supprimer un élément.

## Avec PHP

```php
<?php
//Ouvre une connexion à un serveur MySQL
mysqli_connect()

//Créé une variable link pour lier la db aux fonctions
$link = mysqli_connect($host, $username, $passwd, $dbname)

//Exécute une requête sur la base de données
//Argument 1: le link, argument 2: la requête
mysqli_query($link, "SELECT * FROM `animals`");

//On peut créer une variable contenant la requête
$query = "SELECT * FROM `animals`";
//Et une requête qui contient le resultat (TRUE/FALSE ou la valeur pour un READ/SELECT)
$result = mysqli_query($link, $query);
// ATTENTION ! Les requêtes effectuées dans l'atribution d'une variable
//sont effectuées ! Pour les simuler, il faut utiliser une fonction de prérequête


mysqli_fetch_row() //Récupère une ligne de résultat sous forme de tableau indexé
mysqli_fetch_assoc() // Lit une ligne de résultat MySQL dans un tableau associatif

//Créé un tableau qui contient le résultat.
$array = mysqli_fetch_assoc($result);

//Il ne reste plus qu'a l'afficher
echo $array;
```

##### Accès
On limite l'accès aux APIs pour assurer la stabilité du server. Google, limite l'accès à googlemap à un certain nombre de requète par jour, et demande un paiement au dela.
