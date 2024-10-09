<?php require_once(__DIR__."/templates/header.php"); ?>

<section class="container py-5">
    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-4 col-md-3">
                    <p class="mb-0">Von: <?= date("d.m.y", strtotime($_SESSION["filterStart"])) ?></p>
                </div>
                <div class="col-4 col-md-3">
                    <p class="mb-0">Bis: <?= date("d.m.y", strtotime($_SESSION["filterEnd"])) ?></p>
                </div>
                <div class="col-4 col-md-3">
                    <p class="mb-0">Typ: <?= $_SESSION["filterType"] ?></p>
                </div>
                <div class="col-12 col-md-3">
                    <small class="mb-0"><a href="index.php?reset=true" class="link-danger"><i class="fa-regular fa-circle-xmark"></i> Zurücksetzen</a></small>
                </div>
            </div>    
        </div>
    </div>
    
    <div class="row g-4">
        <!-- Filter -->
        <div class="col-xl-3">
            <div class="card">
                <div class="card-header">
                    Filter <p class="float-end d-xl-none mb-0" style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter"><i class="fa-solid fa-chevron-down"></i></p>
                </div>
                <div class="card-body collapse d-xl-block" id="collapseFilter">
                    <form method="get">
                        <h6>Getriebe</h6>
                        <select name="gear" id="gear" class="form-select">
                            <option value="none">Nicht ausgewählt</option>
                            <option value="schalter">Schaltgetriebe</option>
                            <option value="automatik">Automatikgetriebe</option>
                        </select>
                        <hr>
                        <h6>Personen</h6>
                        <select name="persons" id="persons" class="form-select">
                            <option value="none">Nicht ausgewählt</option>
                            <option value="2">2 Personen</option>
                            <option value="3">3 Personen</option>
                            <option value="4">4 Personen</option>
                            <option value="5">5 Personen</option>
                            <option value="6">6 Personen</option>
                            <option value="7">7 Personen</option>
                            <option value="8">8 Personen</option>
                            <option value="9">9 Personen</option>
                        </select>
                        <hr>
                        <h6>Kraftstoff</h6>
                        <select name="fuel" id="fuel" class="form-select">
                            <option value="none">Nicht ausgewählt</option>
                            <option value="benzin">Benzin</option>
                            <option value="diesel">Diesel</option>
                            <option value="elektro">Elektro</option>
                            <option value="hybrid">Hybrid</option>
                        </select>
                        <hr>
                        <button type="submit" class="btn btn-primary w-100">Filter anwenden</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Liste -->
        <div class="col-xl-9">
            <?php if(empty($cars)){ ?>
                <h4>Ganz schön leer hier <i class="fa-regular fa-face-frown"></i></h4>
                <p>Es konnten leider keine passenden Fahrzeuge für Sie gefunden werden.<br>Bitte versuchen Sie es zu einem späteren Zeitpunkt erneut.</p>
            <?php }else{ foreach($cars as $car){ ?>
            <div class="card mb-3 position-relative">
                <div class="row g-2 align-items-center">
                    <div class="col-md-4 px-4">
                        <img src="assets/images/categories/pkw.png" alt="" class="img-fluid d-block mx-auto" style="width: 350px;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title mb-3"><?= $car["name"] ?></h5>
                            <div class="row">
                                <div class="col-7">
                                    <p class="text-secondary">
                                        <i class="fa-solid fa-gears text-center" style="width: 40px;"></i> <?= $car["getriebe"] ?> <br>
                                        <i class="fa-solid fa-users text-center" style="width: 40px;"></i> <?= $car["personen"] ?> Personen <br>
                                        <i class="fa-solid fa-gas-pump text-center" style="width: 40px;"></i> <?= $car["kraftstoff"] ?>
                                    </p>
                                </div>
                                <div class="col-5">
                                    <p class="display-5 mb-0"><?= number_format($car["preis"], 2, ",", ".") ?> €</p>
                                    <p class="fst-italic text-secondary">pro Tag</p>
                                    <a href="booking.php?carId=<?= $car["carId"] ?>" class="btn btn-primary w-100">Auswählen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } ?>
        </div>
    </div>
</section>

<?php require_once(__DIR__."/templates/footer.php"); ?>