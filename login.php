<?php

require_once(__DIR__."/utilities/utilities.php");

if(isset($_POST["login"]) && isset($_POST["email"]) && isset($_POST["password"])){
    $sql = "SELECT userId FROM user WHERE email = ? AND passwort = ?;";
    $stmt = db_connection()->prepare($sql);
    $stmt->bind_param("ss", $_POST["email"], md5($_POST["password"]));
    if($stmt->execute()){
        $userId = $stmt->fetch();
        if($userId && $userId != null){
            $_SESSION["userId"] = $userId;
            header("Location: index.php");
        }else{
            Alert::setAlert("Falsche Email oder falsches Passwort.", "login", "danger");
            header("Location: ".$_SERVER["REQUEST_URI"]);
            exit();
        }
    }else{
        Alert::setAlert("Fehler mit der Datenbank...", "login", "danger");
        header("Location: ".$_SERVER["REQUEST_URI"]);
        exit();
    }
    $stmt->close();
}

$title = "Anmelden";
$breadcrumb = [
    "Startseite" => "index.php",
    "Anmelden" => "login.php"
];

require_once(__DIR__."/views/login.php");