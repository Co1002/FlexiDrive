<?php

namespace App\Model;

use App\Helper\Alert;
use App\Core\Database;

class Booking{

    public static function book(int $carId){
        if(!isset($_POST["street"]) || !isset($_POST["homenumber"]) || !isset($_POST["location"]) || !isset($_POST["postalcode"]) || !isset($_POST["cardnumber"]) || !isset($_POST["cardname"]) || !isset($_POST["expiration"]) || !isset($_POST["cvv"])){
            Alert::setAlert("Bitte alle Felder ausfüllen.", "booking", "danger");
            return false;
        }
        $sql = "INSERT INTO payment SET strasse = ?, hausnummer = ?, ort = ?, postleitzahl = ?, kartennummer = ?, kartenname = ?, exp = ?, cvv = ?;";
        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("sisiisii", $_POST["street"], $_POST["homenumber"], $_POST["location"], $_POST["postalcode"], $_POST["cardnumber"], $_POST["cardname"], $_POST["expiration"], $_POST["cvv"]);
        if(!$stmt->execute()){
            Alert::setAlert("Fehler mit der Datenbank...", "booking", "danger");
            return false;
        }
        $paymentId = $stmt->insert_id;
        $stmt->close();
        $sql = "INSERT INTO booking SET userId = ?, carId = ?, paymentId = ?, von = ?, bis = ?;";
        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("iiiss", $_SESSION["userId"], $carId, $paymentId, $_SESSION["filterStart"], $_SESSION["filterEnd"]);
        if(!$stmt->execute()){
            Alert::setAlert("Fehler mit der Datenbank...", "booking", "danger");
            return false;
        }
        $stmt->close();
        Alert::setAlert("Ihr Fahrzeug wurde erfolgreich gebucht. Eine Stornierung ist bis zum Startzeitpunkt möglich. Weitere Informationen zum genauen Ablauf finden Sie im FAQ.", "booking", "success");
        return true;
    }

    public static function getUserBookings(int $userId){
        $sql = "SELECT b.bookingId, c.name, c.bild, b.von, b.bis, l.postleitzahl, l.ort
        FROM booking b
        JOIN car c ON b.carId = c.carId
        JOIN `location` l ON l.locationId = c.locationId
        WHERE b.userId = ?";

        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("i", $userId);
        if(!$stmt->execute()){
            return null;
        }
        $result = $stmt->get_result();
        $cars = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();

        return $cars;
    }

    public static function removeBooking(int $bookingId){
        $sql = "DELETE FROM booking WHERE bookingId = ?;";
        $stmt = Database::connection()->prepare($sql);
        $stmt->bind_param("i", $bookingId);
        if(!$stmt->execute()){
            Alert::setAlert("Fehler mit der Datenbank...", "booking", "danger");
            return false;
        }
        $stmt->close();
        Alert::setAlert("Die Buchung #".$bookingId." wurde storniert. Ihr Geld wird Ihnen innerhalb der nächsten zwei Tage zu 90% zurücküberwiesen.", "booking", "success");
        return true;
    }

}