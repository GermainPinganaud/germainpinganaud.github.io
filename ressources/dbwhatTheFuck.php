<?php
//db for database
function connect(){
  mysqli_connect("localhost", "root", "0000", "dwm8", 3306);
  return $link;
}

function checkLogin($user, $password){
  $user = clean($user);
  //sha1 est un cryptage
  $password = cryptThis($password);

  $link = connect();
  mysqli_query($link,
   "SELECT id FROM `user`
    WHERE email  " = . $email
    . " AND password = " . $password
    . " LIMIT 1;"
    );

    //    W H A T     T H E     F U C K     ? ! ? ! ? !
  if (!$result) {
    var_dump("Aucun résultat");
  } else {
    $fetch = mysqli_fetch_row($result);
    var_dump("Connect");
  }
}

//pour empecher le hacking par injonction
function clean($var){
  return htmlspecialchars($var);
}

function cryptThis ($var){
  $_salt = "cacahouette";
  return md($var. $salt);
}
//md5 est un autre outil de cryptage facilement crackable
//la base du hacker :
echo md5("admin");
echo md5("0000");

// il faut ajouter un grain de sel pou renforcer la sécurité
$_SALT = "st33@LOL"
echo md5("0000" . $_SALT);
echo "<br>"
