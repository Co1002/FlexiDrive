<?php

require_once(__DIR__."/utilities/utilities.php");

if(!isset($_SESSION["filterStart"]) || !isset($_SESSION["filterEnd"]) || !isset($_SESSION["filterType"]) || !isset($_GET["carId"])){
    header("Location: index.php");
    exit();
}

$title = "Buchung";
$breadcrumb = [
    "Startseite" => "index.php",
    "Angebote" => "list.php",
    "Buchung" => "booking.php"
];

require_once(__DIR__."/views/booking.php");