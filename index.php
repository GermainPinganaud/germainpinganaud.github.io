<?php
session_start();
require_once("./template/head.html");
require_once("./template/menu.html");
if (!isset($_SESSION["language"])) {
  $_SESSION["language"] = "Fr";
}
require_once("./pages/profil" . $_SESSION["language"] . ".html");
require_once("./template/foot.html");
