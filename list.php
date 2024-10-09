<?php

require_once(__DIR__."/utilities/utilities.php");

$title = "Angebote";
$breadcrumb = [
    "Startseite" => "index.php",
    "Angebote" => "list.php"
];

if(!isset($_SESSION["filterStart"]) || !isset($_SESSION["filterEnd"]) || !isset($_SESSION["filterType"])){
    header("Location: index.php");
    exit();
}

$cars = getAvailableCars($_SESSION["filterStart"],$_SESSION["filterEnd"],$_SESSION["filterType"]);

require_once(__DIR__."/views/list.php");