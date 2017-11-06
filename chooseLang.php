<?php
require_once("./template/head.html");
require_once("./template/header.html");
!isset($_SESSION["lang"]) ? $lang = "Fr" : $lang = $_GET["lang"];
require_once("./template/profil" . $_SESSION["lang"] . ".html");
require_once("./template/travaux.html");
require_once("./template/jsgame.html");
require_once("./template/foot.html");
