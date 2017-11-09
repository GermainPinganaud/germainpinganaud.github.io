<?php
session_start();
if(!(isset($_SESSION['user']) || !empty($_SESSION['user']))) {
  header('Location: connexion.php');
}

echo "Coucou utilisateur<br>";
echo "<a href='logout.php'>Logout</a>";
