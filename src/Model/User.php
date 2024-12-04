<?php

namespace App\Model;

use App\Core\Database;
use App\Helper\Alert;

class User{

    public static function register(){
        if(!isset($_POST["firstname"]) || !isset($_POST["lastname"]) || !isset($_POST["email"]) || !isset($_POST["password"])){
            Alert::setAlert("Bitte alle Felder ausfüllen.", "regsiter", "danger");
            return false;
        }
        $sql = "SELECT 1 FROM user WHERE email = ? OR (vorname = ? AND nachname = ?);";
        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("sss", $_POST["email"], $_POST["firstname"], $_POST["lastname"]);
        if(!$stmt->execute()){
            Alert::setAlert("Fehler mit der Datenbank...", "regsiter", "danger");
            return false;
        }
        $stmt->store_result();
        if($stmt->num_rows() != 0){
            Alert::setAlert("Sie sind bereits registriert!", "regsiter", "danger");
            return false;
        }
        $stmt->close();
        $sql = "INSERT INTO user SET vorname = ?, nachname = ?, email = ?, passwort = ?;";
        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("ssss", $_POST["firstname"], $_POST["lastname"], $_POST["email"], md5($_POST["password"]));
        if(!$stmt->execute()){
            Alert::setAlert("Fehler mit der Datenbank...", "regsiter", "danger");
            return false;
        }
        Alert::setAlert("Sie wurden erfolgreich registriert.", "regsiter", "success");
        if(isset($_SESSION["userId"])){
            unset($_SESSION["userId"]);
        }
        $_SESSION["userId"] = $stmt->insert_id;
        $stmt->close();
        return true;
    }

    public static function login(){
        if(!isset($_POST["email"]) || !isset($_POST["password"])){
            Alert::setAlert("Bitte alle Felder ausfüllen.", "login", "danger");
            return false;
        }
        $sql = "SELECT userId, rolle FROM user WHERE email = ? AND passwort = ?;";
        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("ss", $_POST["email"], md5($_POST["password"]));
        if(!$stmt->execute()){
            Alert::setAlert("Fehler mit der Datenbank...", "login", "danger");
            return false;
        }
        $result = $stmt->get_result();
        if($result->num_rows == 0){
            Alert::setAlert("Falsche Email oder falsches Passwort.", "login", "danger");
            return false;
        }
        $row = $result->fetch_assoc();
        $userId = $row["userId"];
        $role = $row["rolle"];
        if(isset($_SESSION["userId"])){
            unset($_SESSION["userId"]);
        }
        if(isset($_SESSION["admin"])){
            unset($_SESSION["admin"]);
        }
        $_SESSION["userId"] = $userId;
        if($role == "admin"){
            $_SESSION["admin"] = true;
        }
        $stmt->close();
        return true;
    }

    public static function logout(){
        if(isset($_SESSION["userId"])){
            unset($_SESSION["userId"]);
        }
        if(isset($_SESSION["admin"])){
            unset($_SESSION["admin"]);
        }
    }
}