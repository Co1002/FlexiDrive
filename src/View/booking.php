<?php 
use App\Helper\Alert;

$tagespreis = $car["preis"];
$miettage = round((strtotime($_SESSION["filterEnd"]) + 86400 - strtotime($_SESSION["filterStart"])) / 86400);
$gesamtpreis = $miettage * $tagespreis;
$total = $gesamtpreis + 10;
?>
<section class="container py-5">
    <form method="post">
        <div class="row g-4">
            <!-- Zusammenfassung -->
            <div class="col-xl-5">
                <h3>Ihre Auswahl</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        <img src="assets/images/cars/<?= $car["bild"] ?>" alt="" class="img-fluid d-block mx-auto my-2" style="width: 350px;">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5><?= $car["name"] ?></h5>
                                <small><?= date("d.m.y", strtotime($_SESSION["filterStart"])) ?> - <?= date("d.m.y", strtotime($_SESSION["filterEnd"])) ?></small>
                            </div>
                            <span class="text-body-secondary"><?= number_format($gesamtpreis, 2, ",", ".") ?> €</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <h5>Basisversicherung</h5>
                            <span class="text-body-secondary">10,00 €</span>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <form method="post">
                            <div class="d-flex justify-content-between">
                                <input type="text" name="promocode" id="promocode" class="form-control flex-fill" placeholder="Promocode">
                                <button type="submit" class="btn btn-outline-secondary ms-2">Aktivieren</button>
                            </div>
                        </form>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <h5>Total</h5>
                            <span class="text-body-secondary fw-bold"><?= number_format($total, 2, ",", ".") ?> €</span>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Zahlungsformular -->
            <div class="col-xl-7">
                <h3>Zahlung</h3>
                <?= Alert::getAlerts() ?>
                <form method="post">
                    <div class="row g-4">
                        <div class="col-8">
                            <label for="street" class="form-label">Straße:</label>
                            <input type="text" name="street" class="form-control" id="street" required>
                        </div>
                        <div class="col-4">
                            <label for="homenumber" class="form-label">HausNr.:</label>
                            <input type="number" name="homenumber" class="form-control" id="homenumber" required>
                        </div>
                        <div class="col-8">
                            <label for="location" class="form-label">Ort:</label>
                            <input type="text" name="location" class="form-control" id="location" required>
                        </div>
                        <div class="col-4">
                            <label for="postalcode" class="form-label">Postleitzahl:</label>
                            <input type="number" name="postalcode" class="form-control" id="postalcode" required>
                        </div>
                        <div class="col-12">
                            <label for="cardnumber" class="form-label">Kartennummer:</label>
                            <input type="number" name="cardnumber" class="form-control" id="cardnumber" required>
                        </div>
                        <div class="col-6">
                            <label for="cardname" class="form-label">Kartenname:</label>
                            <input type="text" name="cardname" class="form-control" id="cardname" required>
                        </div>
                        <div class="col-3">
                            <label for="expiration" class="form-label">Gültig bis:</label>
                            <input type="number" name="expiration" class="form-control" id="expiration" required>
                        </div>
                        <div class="col-3">
                            <label for="cvv" class="form-label">CVV:</label>
                            <input type="number" name="cvv" class="form-control" id="cvv" required>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="agb" required>
                                <label class="form-check-label" for="agb">
                                    Ich aktzeptiere die AGB's und den Datenschutz.
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Jetzt buchen!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
</section>