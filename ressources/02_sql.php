<pre>
<?php

//Données de connexion
$host= "localhost";
$user="root";
$password="0000";
$dbName="dwm8";
//port SQL
$port= 3306;

//connexion
$res = mysqli_connect($host, $user, $password, $dbName, $port);

if (!$res) {
    die('Erreur de connexion (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}
// pour eviter des bugs d'interclassement
mysqli_set_charset($res, "utf-8");

// injection qui permet 
$_GET["id"] = "2 OR id=1";

$result = mysqli_query($res, "SELECT * FROM `task`;");
// numeroter les ligne
var_dump(mysqli_num_rows($result));
// tout afficher
var_dump(mysqli_fetch_all($result));
// afficher une ligne
var_dump(mysqli_fetch_row($result));
// afficher la suivante
var_dump(mysqli_fetch_row($result));
