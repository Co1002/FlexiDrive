<?php

require_once(__DIR__."/utilities/utilities.php");

if(!isset($_SESSION["userId"])){
    header("Location: login.php");
    exit();
}

$title = "Mietübersicht";
$breadcrumb = [
    "Startseite" => "index.php",
    "Mietübericht" => "dashboard.php"
];

require_once(__DIR__."/views/dashboard.php");