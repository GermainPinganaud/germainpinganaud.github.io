<?php
session_start();
require_once("./template/head.html");
require_once("./template/menu.html");
require_once("./template/header.html");
if (empty($_SESSION["language"])) {
  $_SESSION["language"] = "fr";
}
require_once("./pages/profil" . $_SESSION["language"] . ".html");
require_once("./template/foot.html");
