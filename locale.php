<?php
  session_start();
  $language = $_GET['value'];
  $_SESSION['language'] = $language;
  header("Location: /");
