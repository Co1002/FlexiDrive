<?php
$tagespreis = $car["preis"];
$tage = round((strtotime($_SESSION["filterEnd"]) + 86400 - strtotime($_SESSION["filterStart"])) / 86400);
$gesamtpreis = $tagespreis * $tage;
?>

<section class="container py-5">
    <div class="row g-4 mb-4">
        <!-- Zusammenfassung -->
        <div class="col-lg-6">
            <img src="assets/images/cars/<?= $car["bild"] ?>" alt="" class="img-fluid d-block mx-auto my-2" style="width: 350px;">
        </div>
        <!--Kurze Beschreibung-->
        <div class="col-lg-6">
            <h2><?= $car["name"] ?></h2>
            <p class="mb-0 text-secondary"><small>ab</small></p>
            <h5> Preis/Tag </h5>
            <p class="mb-0 display-6"><?= number_format($tagespreis, 2, ",", ".") ?> €</p>
            <p class="text-secondary fst-italic">Gesamtpreis: <?= number_format($gesamtpreis, 2, ",", ".") ?>€ / <?= $tage ?>Tag(e)</p>
            <p><a href="<?= ROUTE_BASE ?>/list/<?= $car["carId"] ?>/booking" class="btn btn-primary"> Zur Buchung <i class="fa-solid fa-arrow-right"></i></a></p>
        </div>
    </div>
    <div class="row g-4">
        <!-- Kleine Beschreibung -->
        <div class="col-md-6">
            <h5>Wichtige Informationen</h5>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <div> 
                            <h6><i class="fa-solid fa-road text-primary"></i> Kilometerstand </h6>
                            <p class="mb-0"><?= number_format($car["km"], 0, ",", ".") ?>km</p>
                        </div>
                        <span>
                            <h6><i class="fa-solid fa-gauge-high text-primary"></i> Leistung</h6>
                            <p class="mb-0"><?= $car["kw"] ?>kW (<?= $car["ps"] ?>PS)</p>
                        </span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6><i class="fa-solid fa-gas-pump text-primary"></i> Kraftstoff/Verbrauch</h6>
                            <p class="mb-0"><?= $car["kraftstoff"] ?>/<?= number_format($car["verbrauch"], 1, ",", ".") ?> l(100km)</p>
                        </div>
                        <span> 
                            <h6><i class="fa-solid fa-gears text-primary"></i> Getriebe</h6>
                            <p class="mb-0">Automatik</p>
                        </span>
                    </div>
                </li>
            </ul>
        </div>
        <!--Vollständige Fahrzeugdaten -->
        <div class="col-md-6">
            <h5>Vollständige Fahrzeugdaten</h5>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="d-flex flex-wrap">
                        <div class="p-2">
                            <h6 class="mb-0"> <small> <i class="fa-solid fa-users text-primary"></i> Personen </small></h6>
                            <p class="mb-0"><small><?= $car["personen"] ?></small></p>
                        </div>
                        <div class="p-2">
                            <h6 class="mb-0"> <small>  <i class="fa-solid fa-car-side text-primary"></i> Türen </small></h6>
                            <p class="mb-0"><small><?= $car["tueren"] ?></small></p>
                        </div>
                        <div class="p-2">
                            <h6 class="mb-0"> <small>  <i class="fa-regular fa-snowflake text-primary"></i> Klimaanlage </small></h6>
                            <p class="mb-0"><small><?php if($car["klimaanlage"] == 1){ echo "Ja"; }else{ echo "Nein"; } ?></small></p>
                        </div>
                        <div class="p-2">
                            <h6 class="mb-0"> <small>  <i class="fa-solid fa-gauge-high text-primary"></i> Leistung  </small></h6>
                            <p class="mb-0"><small><?= $car["kw"] ?>kW (<?= $car["ps"] ?>PS)</small></p>
                        </div>
                        <div class="p-2">
                            <h6 class="mb-0"> <small>  <i class="fa-solid fa-suitcase-rolling text-primary"></i> Koffer  </small></h6>
                            <p class="mb-0"><small><?= $car["koffer"] ?></small></p>
                        </div>
                        <div class="p-2">
                            <h6 class="mb-0"> <small>  <i class="fa-solid fa-gears text-primary"></i> Automatik </small></h6>
                        </div>
                        <div class="p-2">
                            <h6 class="mb-0"> <small>  <i class="fa-solid fa-id-card text-primary"></i> Mindestalter </small></h6>
                            <p class="mb-0"><small><?= $car["mindestalter"] ?> Jahre</small></p>
                        </div>
                        <div class="p-2">
                            <h6 class="mb-0"> <small>  <i class="fa-solid fa-address-card text-primary"></i> Führerschein </small></h6>
                            <p class="mb-0"><small>Mind. <?= $car["fuehrerschein"] ?></small></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Standort -->
        <div>
            <h5><i class="fa-solid fa-location-dot text-primary"></i> Standort</h5>
            <div class="position-relative border border-2 border-primary" id="map" style="width: 520px; max-width: 100%;">
                <div class="m-5">
                    <h1 class="text-primary"><i class="fa-solid fa-map-location-dot"></i></h1>
                    <h5>Maps nutzen?</h5>
                    <p>Dies ist ein Drittanbieter-Dienst der Google LLC.<br>Möchten Sie die Karte und die dazugehörigen Skripte des Drittanbieters laden?</p>
                    <button class="btn btn-outline-primary" onclick="activateMap()">Ja, laden.</button>
                </div>
            </div>
            <script>
                const mapCode = '<iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=<?= $location["strasse"].$location["hausnummer"].",".$location["postleitzahl"].$location["ort"] ?>&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="max-width: 100%;"></iframe> <a href="https://www.acadoo.de/fachrichtungen/ghostwriter-medizin/" class="d-none">Medizin Thesis</a><script type="text/javascript" src="https://embedmaps.com/google-maps-authorization/script.js?id=6795ad12bd0837871b57d695290c52bb2ae0ee45"><\/script>';
                
                function activateMap(){
                    document.getElementById("map").innerHTML = mapCode;
                }
            </script>
        </div>
    </div>
</section>