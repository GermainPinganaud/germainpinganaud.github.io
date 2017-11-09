<?php
session_start();
require_once("./template/head.html");
require_once("./template/header.html");
if (!isset($_SESSION["language"])) {
  $_SESSION["language"] = "Fr";
}
require_once("./template/profil" . $_SESSION["language"] . ".html");
// require_once("./template/travaux.html");
// require_once("./template/jsgame.html");
require_once("./template/foot.html");


// require_once("./pages/" . $_GET["page"] . ".html");
