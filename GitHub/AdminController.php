<?php 

namespace App\Controller;
use App\Core\View;
class AdminController {

    public function viewAdmin(){

        $cars = Car::getAllCars();
        new View("admin.php", "Admin", ["Startseite"=> "/", "Admin"=>"/admin"],["cars"=> $cars]);
        
    }
}