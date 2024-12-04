<?php

namespace App\Model;

use App\Core\Database;

class Location{

    public static function getLocation(int $locationId){
        $sql = "SELECT strasse, hausnummer, ort, postleitzahl 
        FROM location
        WHERE locationId = ?;";

        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("i", $locationId);
        if(!$stmt->execute()){
            return false;
        }
        $result = $stmt->get_result();
        $location = $result->fetch_assoc();

        $stmt->close();

        return $location;
    }
    public static function getLocations(){
        $sql = "SELECT locationid, strasse, hausnummer, ort, postleitzahl
        FROM `location`";

        $stmt = Database::connection()->prepare($sql);
        if(!$stmt->execute()){
            return null;
        }
        $result = $stmt->get_result();
        $locations = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();

        return $locations;
    }

}