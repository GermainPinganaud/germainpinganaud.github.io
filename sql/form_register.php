<?php
  require_once 'validateRegister.php';
  require_once 'db.php';
  if(isset($_POST['submit'])) {
    $errors = validateRegister();
    if(count($errors) == 0) {
      //INSERT INTO en bdd
      $data['firstname'] = strtolower($_POST['firstname']);
      $data['lastname'] = strtolower($_POST['lastname']);
      $data['password'] = cryptThis($_POST['password']);
      $data['email'] = strtolower($_POST['email']);

      $result = insertUser($data);
      if($result !== false){
        header('refresh:5;url=../index.php');
        echo "Enregistrement effectué, 5 secondes avant redirection...";
      }
    }
  }
?>
<form action="" method="POST">
  <label for="firstname">Prenom</label>
  <input id="firstname" type="text" value='<?= (isset($_POST["firstname"]))? $_POST["firstname"] : "";?>' name="firstname">
  <br>
  <?php
    if(isset($errors['firstname'])){
      echo $errors['firstname'] . "<br>";
    }
  ?>
  <label for="lastname">Nom</label>
  <input id="lastname" type="text" value='<?= (isset($_POST["lastname"]))? $_POST["lastname"] : "";?>' name="lastname">
  <br>
  <?php
    if(isset($errors['lastname'])){
      echo $errors['lastname'] . "<br>";
    }
  ?>
  <label for="email">Email</label>
  <input id="email" type="text" value='<?= (isset($_POST["email"]))? $_POST["email"]: ""?>' name="email">
  <br>
  <?php //if(isset($errors['email'])){ echo $errors['email']; }?>
  <?= (isset($errors['email']))? $errors['email'] . "<br>": "" ?>
  <label for="password">Password</label>
  <input id="password" type="password" name="password">
  <br>
  <?php
    if(isset($errors['password'])){
      echo "<ul>";
        foreach ($errors['password'] as $data) {
          echo "<li>$data</li>";
        }
      echo "</ul>";
    }
  ?>
  <label for="repassword">Re-Password</label>
  <input id="repassword" type="password" name="repassword">
  <br>
  <?php
    if(isset($errors['repassword'])){
      echo $errors['repassword'] . "<br>";
    }
  ?>

  <input name="submit" type="submit">
</form>
