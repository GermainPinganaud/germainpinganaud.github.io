<?php
/**
 * Vérifie la validité du formulaire Register
 * @return array
 */
function validateRegister(){
  $errors = [];
  $error = validateRequired($_POST['firstname']);
  if($error) {
    $errors['firstname'] = $error;
  }
  $error = validateRequired($_POST['lastname']);
  if($error) {
    $errors['lastname'] = $error;
  }
  $error = validateEmail($_POST['email']);
  if($error) {
    $errors['email'] = $error;
  }
  $error = validatePassword($_POST['password']);
  if($error) {
    $errors['password'] = $error;
  }
  $error = validateIdentical($_POST['password'], $_POST['repassword']);
  if($error) {
    $errors['repassword'] = $error;
  }
  return $errors;
}

/**
 * Vérifie l'existence du contenu de la chaine de caractère
 * @var $str String à vérifier
 * @return string | void
 */
function validateRequired($str){
  if(empty($str)){
    return "Element obligatoire non facultatif";
  }
}

/**
 * Vérifie la validité d'un password
 * @var $password Password à valider
 * @return array | void
 */
function validatePassword($password){
  $errors = array();

  if(strlen($password) < 5) {
    $errors['invalidLenght'] = "Mot de passe inférieur à 5 caractères...";
  }

  if(!preg_match('/[[:digit:]]/', $password)) {
    $errors['invalidDigit'] = "Mot de passe ne contenant pas de numérique...";
  }

  if(!preg_match('/[a-zA-Z]/', $password)) {
    $errors['invalidAlpha'] = "Mot de passe ne contenant pas de lettre alphabet...";
  }

  if(strtolower($password) == $password) {
    $errors['invalidUpper'] = "Mot de passe ne contenant pas de Majuscule";
  }

  $specialAllow = ["&", "@", "#", "[", "]", "*", "%"];
  if(str_replace($specialAllow, "_", $password) == $password) {
    $errors['invalidSpecial'] = "Mot de passe ne contenant pas un caractère spécial comme " . join($specialAllow);
  }
  if(!empty($errors)) {
    return $errors;
  }
}

/**
 * Vérifie la validité d'un email
 * @var $email Email à valider
 * @return string | void
 */
function validateEmail($email){
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    return "Email invalide";
  }
}
function validateIdentical($str1, $str2)
{
  if ($str1 !== $str2) {
    return "Non identique...";
  }
}
