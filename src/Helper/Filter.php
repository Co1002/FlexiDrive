<?php

namespace App\Helper;

use App\Helper\Alert;

class Filter{

    public static function setHomeFilter(string $startDate, string $endDate, string $location, string $type){
        if(!strtotime($startDate) || !strtotime($endDate)){
            Alert::setAlert("Das Datum wurde nicht ordnungsgemäß übermittelt. Bitte versuchen Sie es erneut.", "filterHome", "warning");
            return false;
        }
        if(strtotime($startDate) < time()){
            Alert::setAlert("Der Mietzeitraum darf nicht in der Vergangenheit liegen.", "mainSearch", "warning");
            return false;
        }
        if(strtotime($startDate) > strtotime($endDate)){
            Alert::setAlert("Das Enddatum darf nicht kleiner als das Startdatum sein.", "mainSearch", "warning");
            return false;
        }
        $_SESSION["filterStart"] = $startDate;
        $_SESSION["filterEnd"] = $endDate;
        $_SESSION["filterLocation"] = $location;
        $_SESSION["filterType"] = $type;
        return true;
    }

    public static function isHomeFilterSet(){
        if(isset($_SESSION["filterStart"]) && isset($_SESSION["filterEnd"]) && isset($_SESSION["filterLocation"]) && isset($_SESSION["filterType"])){
            return true;
        }else{
            return false;
        }
    }

}