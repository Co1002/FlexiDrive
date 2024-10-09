<?php

function db_connection(){

    static $db;

    if ($db instanceof mysqli) {
        return $db;
    }

    try {
        $db = new mysqli("localhost","root","","flexidrive");

        if($db->connect_errno){
            echo "<h1>HTTP 500: Datenbank Fehler</h1><p>Leider gab es ein Problem bei der Verbindung mit unserer Datenbank.<br>Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut.</p><br><br>Fehler-Code: ". $db-> connect_error;
            exit;
        }
    } catch (\Throwable $th) {
        echo "<h1>HTTP 500: Datenbank Fehler</h1><p>Leider gab es ein Problem bei der Verbindung mit unserer Datenbank.<br>Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut.</p>";
        exit;
    }

    return $db;

}