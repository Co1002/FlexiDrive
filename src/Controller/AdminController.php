<?php 

namespace App\Controller;

use App\Core\View;
use App\Model\Car;
use App\Model\Location;
use App\Model\Type;

class AdminController {

    public function viewAdmin(){

        $cars = Car::getAllCars();
        new View("admin.php", "Admin", ["Startseite"=> "/", "Admin"=>"/admin"],["cars"=> $cars]);
        
    }

    public function createCar(){
        
        $locations =Location::getLocations();
        $types = Type::getTypes();
        new View("adminCreateCar.php", "Fahrzeug Hinzufügen", ["Startseite"=> "/", "Admin"=>"/admin", "Hinzufügen" => "/admin/createCar"],["locations"=> $locations, "types"=> $types]);

    }
    public function insertCar(){

        Car::createCar();
        $this->createCar();

    }
    public function editCar(int $carId){
        $car = Car::getCarAdmin($carId);
        if($car && $car != null){
            new View("adminEditCar.php", "Fahrzeug Bearbeiten", ["Startseite"=> "/", "Admin"=>"/admin", "Bearbeiten" => "/admin/editCar"], ["car" => $car]);
        }else{
            header("Location: /admin");
            exit();
        }
    }
    public function updateCar(int $carId){
        if(isset($_POST["updateCar"])){
            Car::updateCar($carId);
            $this->editCar($carId);
        }
        if(isset($_POST["deleteCar"])){
            Car::deleteCar($carId);
            header("Location: /admin");
            exit();
        }
    }
}