<?php

namespace App\Model;

use App\Core\Database;
use App\Helper\Alert;

class Car{

    public static function getCars(){
        $sql = "SELECT 
    c.carId, 
    c.name, 
    c.preis, 
    c.getriebe, 
    c.personen, 
    c.kraftstoff, 
    c.bild
FROM 
    car c
JOIN 
    type t 
ON 
    c.typeId = t.typeId
JOIN 
    location l 
ON 
    c.locationId = l.locationId
WHERE 
    t.name = ?             -- 3. Platzhalter: Fahrzeugtyp
    AND l.ort = ?          -- 4. Platzhalter: Standort
    AND NOT EXISTS (
        SELECT 1 
        FROM booking b 
        WHERE 
            b.carId = c.carId 
            AND (
                (? < b.bis AND ? > b.von)  -- 1. und 2. Platzhalter: Zeitraum von und bis
            )
    );";

        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("ssss", $_SESSION["filterType"], $_SESSION["filterLocation"], $_SESSION["filterStart"], $_SESSION["filterEnd"]);
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
    public static function getCarAdmin(int $carId){
        $sql = "SELECT c.carId, c.typeId, c.locationId, c.name, c.preis, c.bild, c.personen, c.tueren, c.getriebe, c.kraftstoff, c.verbrauch, c.kw, c.ps, c.km, c.klimaanlage, c.koffer, c.mindestalter, c.fuehrerschein 
        FROM car c
        WHERE c.carId = ?;";

        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("i", $carId);
        if(!$stmt->execute()){
            return false;
        }
        $result = $stmt->get_result();
        $car = $result->fetch_assoc();

        $stmt->close();

        return $car;
    }
    public static function getAllCars(){
        $sql = "SELECT 
            c.carId, 
            c.name, 
            CASE 
                WHEN b.bookingId IS NOT NULL THEN 'gebucht' 
                ELSE 'verfügbar' 
            END AS status
            FROM 
                car c
            LEFT JOIN 
                booking b 
            ON 
                c.carId = b.carId 
            AND 
                NOW() BETWEEN b.von AND b.bis
        ;";

        $stmt = Database::connection()->prepare($sql);
        if(!$stmt->execute()){
            return null;
        }
        $result = $stmt->get_result();
        $cars = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();

        return $cars;
    }
    
    public static function createCar(){
        $original = $_FILES["picture"]["tmp_name"];
        $copy = random_int(0,100000).time().".png";
        move_uploaded_file($original, __DIR__."/../../assets/images/cars/".$copy);
        $sql = "INSERT INTO car SET typeId = ".$_POST["type"].", locationId = ".$_POST["location"].", `name` = '".$_POST["name"]."', preis = ".(float)$_POST["price"].", bild = '".$copy."', personen = ".$_POST["persons"].", tueren = '".$_POST["doors"]."', getriebe = '".$_POST["gear"]."', kraftstoff = '".$_POST["fuel"]."', verbrauch = ".(float)$_POST["consumption"].", kw = ".$_POST["kw"].", ps = ".$_POST["ps"].", km = ".$_POST["mileage"].", klimaanlage = ".$_POST["airconditioning"].", koffer = ".$_POST["luggage"].", mindestalter = ".$_POST["minimumage"].", fuehrerschein = '".$_POST["drivinglicense"]."' ;";
        $stmt = Database::connection()->prepare($sql);
        if(!$stmt->execute()){
            Alert::setAlert("Fehler mit der Datenbank...", "createCar", "danger");
            return false;
        }
        $stmt->close();
        return true;
    
    }
    public static function updateCar(int $carId){
        $sql = "UPDATE car SET preis = ".(float)$_POST["price"].", km = ".$_POST["mileage"]." WHERE carId = ?;";
        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("i", $carId);
        if(!$stmt->execute()){
            Alert::setAlert("Fehler mit der Datenbank...", "updateCar", "danger");
            return false;

        }
        $stmt->close();
        return true;
    }
    public static function deleteCar(int $carId){
        $sql ="DELETE FROM car WHERE carId= ?;";
        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("i", $carId);
        if(!$stmt->execute()){
            Alert::setAlert("Fehler mit der Datenbank...", "deleteCar", "danger");
            return false;

        }
        $stmt->close();
        return true;
    }
}