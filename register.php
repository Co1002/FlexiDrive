<?php

require_once(__DIR__."/utilities/utilities.php");

if(isset($_POST["register"])&& isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"]) && isset($_POST["password"])){
    $sql = "SELECT 1 FROM user WHERE email = ? OR (vorname = ? AND nachname = ?);";
    $stmt = db_connection()->prepare($sql);
    $stmt->bind_param("sss", $_POST["email"], $_POST["firstname"], $_POST["lastname"]);
    if(!$stmt->execute()){
        Alert::setAlert("Fehler mit der Datenbank...", "regsiter", "danger");
        header("Location: ".$_SERVER["REQUEST_URI"]);
        exit();
    }
    $stmt->store_result();
    if($stmt->num_rows() != 0){
        Alert::setAlert("Sie sind bereits registriert!", "regsiter", "danger");
        header("Location: ".$_SERVER["REQUEST_URI"]);
        exit();
    }
    $stmt->close();
    $sql = "INSERT INTO user SET vorname = ?, nachname = ?, email = ?, passwort = ?;";
    $stmt = db_connection()->prepare($sql);
    $stmt->bind_param("ssss", $_POST["firstname"], $_POST["lastname"], $_POST["email"], md5($_POST["password"]));
    if(!$stmt->execute()){
        Alert::setAlert("Fehler mit der Datenbank...", "regsiter", "danger");
        header("Location: ".$_SERVER["REQUEST_URI"]);
        exit();
    }
    $_SESSION["userId"] = $stmt->insert_id;
    $stmt->close();
    header("Location: index.php");
}

$title = "Registrieren";
$breadcrumb = [
    "Startseite" => "index.php",
    "Registrieren" => "register.php"
];

require_once(__DIR__."/views/register.php");