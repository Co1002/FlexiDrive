<?php

require_once(__DIR__."/utilities/utilities.php");

$title = "Startseite";
$breadcrumb = [
    "Startseite" => "index.php"
];

if(isset($_POST["mainSearch"]) && isset($_POST["startDate"]) && isset($_POST["endDate"]) && isset($_POST["type"])){
    if(strtotime($_POST["startDate"]) <= strtotime($_POST["endDate"])){
        $_SESSION["filterStart"] = $_POST["startDate"];
        $_SESSION["filterEnd"] = $_POST["endDate"];
        $_SESSION["filterType"] = $_POST["type"];
        header("Location: list.php");
        exit();
    }else{
        Alert::setAlert("Das Enddatum darf nicht kleiner als das Startdatum sein.", "mainSearch", "warning");
        header("Location: index.php");
        exit();
    }
}

if(isset($_GET["reset"])){
    if(isset($_SESSION["filterStart"])) {
        unset($_SESSION["filterStart"]);
    }
    if(isset($_SESSION["filterEnd"])) {
        unset($_SESSION["filterEnd"]);
    }
    if(isset($_SESSION["filterType"])) {
        unset($_SESSION["filterType"]);
    }
    header("Location: index.php");
    exit();
}

$startDate = isset($_SESSION["filterStart"]) ? $_SESSION["filterStart"] : date('Y-m-d');
$endDate = isset($_SESSION["filterEnd"]) ? $_SESSION["filterEnd"] : date('Y-m-d', strtotime("+3 days"));
$type = isset($_SESSION["filterType"]) ? $_SESSION["filterType"] : "pkw";

require_once(__DIR__."/views/index.php");