<?php

namespace App\Model;

use App\Core\Database;

class Car{

    public static function getCars(){
        $sql = "SELECT c.carId, c.name, c.preis, getriebe, personen, kraftstoff, bild 
        FROM car c
        LEFT JOIN booking b ON c.carId = b.carId AND (b.von <= ? AND b.bis >= ?) 
        JOIN type t ON c.typeId = t.typeId 
        JOIN location l ON c.locationId = l.locationid 
        WHERE t.name = ? AND l.ort = ? AND b.carId IS NULL;";

        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("ssss", $_SESSION["filterStart"], $_SESSION["filterEnd"], $_SESSION["filterType"], $_SESSION["filterLocation"]);
        if(!$stmt->execute()){
            return null;
        }
        $result = $stmt->get_result();
        $cars = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();

        return $cars;
    }

    public static function getCar(int $carId){
        $sql = "SELECT c.carId, c.typeId, c.locationId, c.name, c.preis, c.bild, c.personen, c.tueren, c.getriebe, c.kraftstoff, c.verbrauch, c.kw, c.ps, c.km, c.klimaanlage, c.koffer, c.mindestalter, c.fuehrerschein 
        FROM car c
        LEFT JOIN booking b ON c.carId = b.carId AND (b.von <= ? AND b.bis >= ?) 
        JOIN type t ON c.typeId = t.typeId 
        JOIN location l ON c.locationId = l.locationid 
        WHERE t.name = ? AND l.ort = ? AND b.carId IS NULL AND c.carId = ?;";

        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("ssssi", $_SESSION["filterStart"], $_SESSION["filterEnd"], $_SESSION["filterType"], $_SESSION["filterLocation"], $carId);
        if(!$stmt->execute()){
            return false;
        }
        $result = $stmt->get_result();
        $car = $result->fetch_assoc();

        $stmt->close();

        return $car;
    }
    public static function getAllCars(){
        $sql = "SELECT c.carId, c.name, c.preis, getriebe, personen, kraftstoff, bild 
        FROM car c
        LEFT JOIN booking b ON c.carId = b.carId
        JOIN type t ON c.typeId = t.typeId 
        JOIN location l ON c.locationId = l.locationid";

        $stmt = Database::connection()->prepare($sql);
        if(!$stmt->execute()){
            return null;
        }
        $result = $stmt->get_result();
        $cars = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();

        return $cars;
    }

}