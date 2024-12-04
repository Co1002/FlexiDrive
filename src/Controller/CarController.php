<?php

namespace App\Controller;

use App\Core\View;
use App\Model\Car;
use App\Helper\Filter;
use App\Model\Location;

class CarController{

    public function list(){
        if(!Filter::isHomeFilterSet()){
            header("Location: ".ROUTE_BASE."/");
            exit();
        }
        $cars = Car::getCars();
        new View("list.php", "Angebote", ["Startseite" => "/", "Angebote" => "/list"], ["cars" => $cars]);
    }

    public function car(int  $carId){
        if(!Filter::isHomeFilterSet()){
            header("Location: ".ROUTE_BASE."/");
            exit();
        }
        $car = Car::getCar($carId);
        if(!$car || $car == null){
            header("Location: ".ROUTE_BASE."/list");
            exit();
        }
        $location = Location::getLocation($car["locationId"]);
        new View("car.php", $car["name"], ["Startseite" => "/", "Angebote" => "/list", "Auto" => "/list/".$carId], ["car" => $car, "location" => $location]);
    }

}