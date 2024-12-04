<?php

namespace App\Controller;

use App\Core\View;
use App\Model\Car;
use App\Helper\Filter;
use App\Model\Booking;

class BookingController{

    public function viewBooking(int $carId){
        if(!Filter::isHomeFilterSet()){
            header("Location: ".ROUTE_BASE."/");
            exit();
        }
        if(!isset($_SESSION["userId"])){
            header("Location: ".ROUTE_BASE."/user/login");
            exit();
        }
        $car = Car::getCar($carId);
        if(!$car || $car == null){
            header("Location: ".ROUTE_BASE."/list");
            exit();
        }
        new View("booking.php", "Buchung", ["Startseite" => "/", "Angebote" => "/list", "Auto" => "/list/".$carId, "Buchung" => "/list/".$carId."/booking"], ["car" => $car]);
    }

    public function booking(int $carId){
        if(!Filter::isHomeFilterSet()){
            header("Location: ".ROUTE_BASE."/");
            exit();
        }
        if(!isset($_SESSION["userId"])){
            header("Location: ".ROUTE_BASE."/user/login");
            exit();
        }
        $car = Car::getCar($carId);
        if(!$car || $car == null){
            header("Location: ".ROUTE_BASE."/list");
            exit();
        }
        if(Booking::book($carId)){
            header("Location: ".ROUTE_BASE."/user/dashboard");
            exit();
        }else{
            header("Location: ".ROUTE_BASE."/list/".$carId."/book");
            exit();
        }
    }

}