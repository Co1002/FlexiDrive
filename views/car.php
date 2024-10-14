<?php require_once(__DIR__."/templates/header.php"); ?>

<section class="container py-5">
    <div class="row g-4">
        <!-- Zusammenfassung -->
        <div class="col-lg-6">
            <h3>Ihre Auswahl</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <img src="assets/images/categories/pkw.png" alt="" class="img-fluid d-block mx-auto my-2" style="width: 350px;">
                    <div class="d-flex justify-content-between">
                    </div>
                </li>
            </ul>
        </div>
        <!--Kurze Beschreibung-->
        <div class="col-lg-6">
            <h3>VW-Golf</h3>
            <p class="mb-0 text-secondary"><small> AB </small></p>
            <h5> Preis/Tag </h5>
            <p class="mb-0 display-6"> 48,99€ </p>
            <p class="text-secondary fst-italic"> Gesamtpreis </p>
            <p><a href="booking.php?carId=1" class="btn btn-primary"> Zur Buchung <i class="fa-solid fa-arrow-right"></i></a></p>
        </div>
        <!-- Kleine Beschreibung -->
        <div class="col-md-6">
            <ul class="list-group">
                <h5>Wichtige Informationen</h5>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <div> 
                            <h6><i class="fa-solid fa-road text-primary"></i> Kilometerstand </h6>
                            <h> 41.578km</h>
                        </div>
                        <span><h6><i class="fa-solid fa-gauge-high text-primary"></i> Leistung</h6><h> 221kW (300PS)</h></span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6><i class="fa-solid fa-gas-pump text-primary"></i> Kraftstoff/Verbrauch</h6>
                            <h>Benzin/6,6 l(100km)</h>
                        </div>
                        <span> <h6> <i class="fa-solid fa-gears text-primary"></i> Getriebe</h6> <h>Automatik</h></span>
                    </div>
                </li>
            </ul>
        </div>
        <!--Vollständige Fahrzeugdaten -->
        <div class="col-md-6">
            <ul class="list-group">
                <h5>Vollständige Fahrzeugdaten</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="d-flex flex-wrap">
                                <div class="p-2">
                                    <h6 class="mb-0"> <small> <i class="fa-solid fa-users text-primary"></i> Personen </small></h6>
                                    <p class="mb-0"><small> 6 </small></p>
                                </div>
                                <div class="p-2">
                                    <h6 class="mb-0"> <small>  <i class="fa-solid fa-car-side text-primary"></i> Türen </small></h6>
                                    <p class="mb-0"><small> 5 </small></p>
                                </div>
                                <div class="p-2">
                                    <h6 class="mb-0"> <small>  <i class="fa-regular fa-snowflake text-primary"></i> Klimaanlage </small></h6>
                                </div>
                                <div class="p-2">
                                    <h6 class="mb-0"> <small>  <i class="fa-solid fa-gauge-high text-primary"></i> Leistung  </small></h6>
                                    <p class="mb-0"><small> 221kW (300PS) </small></p>
                                </div>
                                <div class="p-2">
                                    <h6 class="mb-0"> <small>  <i class="fa-solid fa-suitcase-rolling text-primary"></i> Koffer  </small></h6>
                                    <p class="mb-0"><small> 1 </small></p>
                                </div>
                                <div class="p-2">
                                    <h6 class="mb-0"> <small>  <i class="fa-solid fa-gears text-primary"></i> Automatik </small></h6>
                                </div>
                                    <div class="p-2">
                                    <h6 class="mb-0"> <small>  <i class="fa-solid fa-id-card text-primary"></i> Mindesalter </small></h6>
                                    <p class="mb-0"><small> 18 Jahre</small></p>
                                </div>
                            </div>
                        </li>
                    </ul>
            </ul>   
        </div>
        <div>
            
        </div>
    </div>
</section>

<?php require_once(__DIR__."/templates/footer.php"); ?>