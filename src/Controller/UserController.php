<?php

namespace App\Controller;

use App\Core\View;
use App\Model\User;
use App\Model\Booking;

class UserController{

    public function viewRegister(){
        if(!isset($_SESSION["userId"])){
            new View("register.php", "Registrieren", ["Startseite" => "/", "Registrieren" => "/user/register"]);
        }else{
            header("Location: ".ROUTE_BASE."/user/dashboard");
            exit();
        }
    }

    public function register(){
        if(User::register()){
            header("Location: ".ROUTE_BASE."/user/dashboard");
            exit();
        }else{
            header("Location: ".ROUTE_BASE."/user/register");
            exit();
        }
    }

    public function viewLogin(){
        if(!isset($_SESSION["userId"])){
            new View("login.php", "Anmelden", ["Startseite" => "/", "Anmelden" => "/user/login"]);
        }else{
            header("Location: ".ROUTE_BASE."/user/dashboard");
            exit();
        }
    }

    public function login(){
        if(User::login()){
            header("Location: ".ROUTE_BASE."/user/dashboard");
            exit();
        }else{
            header("Location: ".ROUTE_BASE."/user/login");
            exit();
        }
    }

    public function logout(){
        User::logout();
        header("Location: ".ROUTE_BASE."/");
        exit();
    }

    public function dashboard(){
        if(!isset($_SESSION["userId"])){
            header("Location: ".ROUTE_BASE."/user/login");
            exit();
        }else{
            $userBookings = Booking::getUserBookings($_SESSION["userId"]);
            $userBookingsFuture = [];
            $userBookingsCurrent = [];
            $userBookingsPast = [];
            if($userBookings && $userBookings != null){
                foreach($userBookings as $booking){
                    if(strtotime($booking["bis"]) < time()){
                        // Abgeschlossen:
                        $userBookingsPast[] = $booking;
                    }else if(strtotime($booking["von"]) < time()){
                        // Laufend:
                        $userBookingsCurrent[] = $booking;
                    }else{
                        // Kommend:
                        $userBookingsFuture[] = $booking;
                    }
                }
            }
            array_multisort(array_column($userBookingsPast, "bis"), SORT_DESC);
            array_multisort(array_column($userBookingsCurrent, "bis"), SORT_ASC);
            array_multisort(array_column($userBookingsFuture, "bis"), SORT_ASC);
            new View("dashboard.php", "Mietübersicht", ["Startseite" => "/", "Übersicht" => "/user/dashboard"], ["userBookingsPast" => $userBookingsPast, "userBookingsCurrent" => $userBookingsCurrent, "userBookingsFuture" => $userBookingsFuture]);
        }
    }

    public function removeBooking(){
        if(isset($_POST["removeBooking"]) && isset($_POST["bookingId"]) && isset($_SESSION["userId"])){
            Booking::removeBooking($_POST["bookingId"], $_SESSION["userId"]);
            self::dashboard();
        }
    }

}