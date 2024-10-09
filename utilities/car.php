<?php

function getAvailableCars(string $start, string $end, string $type, string $gear = null, int $persons = null, string $gas = null){

    $sql = "SELECT car.carId, car.name, car.preis, getriebe, personen, kraftstoff, bild FROM car JOIN type ON car.typeId = type.typeId WHERE type.name = ?;";

    $stmt = db_connection()->prepare($sql);
    $stmt->bind_param("s", $type);
    if(!$stmt->execute()){
        Alert::setAlert("Fehler mit der Datenbank...", "car", "danger");
        header("Location: index.php");
        exit();
    }
    $result = $stmt->get_result();
    $cars = $result->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    return $cars;
}