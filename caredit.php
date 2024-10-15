<?php

require_once(__DIR__."/utilities/utilities.php");

$title = "Mietübersicht";
$breadcrumb = [
    "Startseite" => "index.php",
    "Fahrzeugbearbeitung" => "caredit.php"
];

require_once(__DIR__."/views/caredit.php");