<?php

namespace App\Controller;

use App\Core\View;
use App\Helper\Filter;
use App\Model\Location;

class MainController{

    public function home(){

        $locations = Location::getLocations();

        $startDate = isset($_SESSION["filterStart"]) ? $_SESSION["filterStart"] : "";
        $endDate = isset($_SESSION["filterEnd"]) ? $_SESSION["filterEnd"] : "";
        $location = isset($_SESSION["filterLocation"]) ? $_SESSION["filterLocation"] : "pforzheim";
        $type = isset($_SESSION["filterType"]) ? $_SESSION["filterType"] : "pkw";

        new View("home.php", "Home", ["Startseite" => "/"], ["startDate" => $startDate, "endDate" => $endDate, "location" => $location, "type" => $type, "locations" => $locations]);
    }

    public function applyFilter(){
        if(Filter::setHomeFilter($_POST["startDate"], $_POST["endDate"], $_POST["location"], $_POST["type"])){
            header("Location: ".ROUTE_BASE."/list");
            exit();
        }else{
            header("Location: ".ROUTE_BASE."/");
            exit();
        }
    }

    public function faq(){
        new View("faq.php", "FAQ", ["Startseite" => "/", "FAQ" => "/faq"]);
    }

    public function aboutUs(){
        new View("aboutUs.php", "Über uns", ["Startseite" => "/", "Über uns" => "/aboutUs"]);
    }

    public function imprint(){
        new View("imprint.php", "Impressum", ["Startseite" => "/", "Impressum" => "/imprint"]);
    }

    public function http500(){
        new View("http500.php", "500 Datenbank Fehler", ["Startseite" => "/", "500" => "/500"]);
    }

    public function http404(){
        new View("http404.php", "404 Not found", ["Startseite" => "/", "404" => "/404"]);
    }

}