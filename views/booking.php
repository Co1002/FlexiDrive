<?php require_once(__DIR__."/templates/header.php"); ?>

<section class="container py-5">
    <div class="row g-4">
        <!-- Zusammenfassung -->
        <div class="col-xl-5">
            <h3>Ihre Auswahl</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <img src="assets/images/categories/pkw.png" alt="" class="img-fluid d-block mx-auto my-2" style="width: 350px;">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5>Fahrzeug XY</h5>
                            <small><?= date("d.m.y", strtotime($_SESSION["filterStart"])) ?> - <?= date("d.m.y", strtotime($_SESSION["filterEnd"])) ?></small>
                        </div>
                        <span class="text-body-secondary">678,75 €</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <h5>Kaution</h5>
                        <span class="text-body-secondary">250,00 €</span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <h5>Vollkasko</h5>
                        <span class="text-body-secondary">127,21 €</span>
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
                        <span class="text-body-secondary fw-bold">1055,96 €</span>
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
                        <button type="submit" class="btn btn-primary">Jetzt buchen!</button>
                    </div>
                </div>
            </form>
        </div>
        <!--Technischen Daten -->
        <div class="col-xl-5">
            <ul class="list-group">
                <h5>Technischen Daten</h5>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                        <td>Fahrzeugzustand</td>
                        <td>Gebrauchtfahrzeug, Unfallfrei</td>
                        </tr>
                        <tr>
                        <td>Kategorie</td>
                        <td>Limousine</td>
                        </tr>
                        <tr>
                        <td>Fahrzeugnummer</td>
                        <td>4889</td>
                        </tr>
                        <tr>
                        <td>Herkunft</td>
                        <td>Deutsche Ausführung</td>
                        </tr>
                        <tr>
                        <td>Kilometerstand</td>
                        <td>41.578 km</td>
                        </tr>
                        <tr>
                        <td>Hubraum</td>
                        <td>1.984 cm^3</td>
                        </tr>
                        <tr>
                        <td>Leistung</td>
                        <td>221kW (300PS)</td>
                        </tr>
                        <tr>
                        <td>Antriebsart</td>
                        <td>Verbrennungsmotor</td>
                        </tr>
                        <tr>
                        <td colspan= "2"><!--In bearbeitund-->
                        <p class="mb-0">
                            <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Mehr anzeigen
                            </a>
                        </p>
                        </td>
                        </tr>
                        <div class="collapse" id="collapseExample">
                            <tr>
                            <td>Kraftstoffart</td>
                            <td>Benzin, E10-geeignet</td>
                            </tr>
                            <tr>
                            <td>Energieverbrauch (komb.)^2</td>
                            <td>6,6 l/100km</td>
                            </tr>
                            <tr>
                            <td>Anzahl Sitzplätze</td>
                            <td>5</td>
                            </tr>
                            <tr>
                            <td>Anzahl der Türen</td>
                            <td>4/5</td>
                            </tr>
                            <tr>
                            <td>Getriebe</td>
                            <td>Automatik</td>
                            </tr>
                            <tr>
                            <td>Schadstoffklasse</td>
                            <td>Euro6d-TEMP</td>
                            </tr>
                            <tr>
                            <td>Umweltplakette</td>
                            <td>4 (Grün)</td>
                            </tr>
                            <tr>
                            <td>Erstzulassung</td>
                            <td>06/2022</td>
                            </tr>
                            <tr>
                            <td>HU</td>
                            <td>Neu</td>
                            </tr>
                            <tr>
                            <td>Klimatisierung</td>
                            <td>2-Zonen-Klimaautomatik</td>
                            </tr>
                            <tr>
                            <td>Einparkhilfe</td>
                            <td>Vorne, Kamera, Hinten</td>
                            </tr>
                            <tr>
                            <td>Airbags</td>
                            <td>Front-,Seiten- und weitere Airbags</td>
                            </tr>
                            <tr>
                            <td>Farbe (Hersteller)</td>
                            <td>Weiß</td>
                            </tr>
                            <tr>
                            <td>Farbe</td>
                            <td>weiß</td>
                            </tr>
                            <tr>
                            <td>Innenausstattung</td>
                            <td>Velours, Schwarz</td>
                            </tr>
                            <tr>
                            <td>Zylinder</td>
                            <td>4</td>
                            </tr>
                        </div>
                    </tbody>
                </table>
            </ul>   
        </div>
        <!-- Kleine Beschreibung -->
        <div class="col-xl-5">
            <ul class="list-group">
            <h5>Wichtige Informationen</h5>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <div> 
                            <h6><i class="fa-solid fa-road"></i> Kilometerstand </h6>
                            <h> 41.578km</h>
                        </div>
                        <span><h6><i class="fa-solid fa-gauge-high"></i> Leistung</h6><h> 221kW (300PS)</h></span>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6><i class="fa-solid fa-gas-pump"></i> Kraftstoff/Verbrauch</h6>
                            <h>Benzin/6,6 l(100km)</h>
                        </div>
                        <span> <h6> <i class="fa-solid fa-gear"> </i> Getriebe</h6> <h>Automatik</h></span>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Ausstattung -->
        <div class="col-xl-5">
            <ul class="list-group">
                <h5>Ausstattung</h5>
                <table class="table table-striped">
                    <tr>
                    <td>Abgedunkelte Scheiben <i class="fa-solid fa-check"></i></td>
                    <td>ABS <i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                    <td>Abstandstempomat <i class="fa-solid fa-check"></i></td>
                    <td>Abstandwarner <i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                    <td>Adaptives Kurvenlicht <i class="fa-solid fa-check"></i></td>
                    <td>Alarmanlage  <i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                    <td>Ambiente-Beleuchtung <i class="fa-solid fa-check"></i></td>
                    <td>Adroind Auto <i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                    <td>Anhängerkupplung-Vorbereitung <i class="fa-solid fa-check"></i></td>
                    <td>Apple CarPlay <i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                    <td>Armlehne <i class="fa-solid fa-check"></i></td>
                    <td>Berganfahrassistent <i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                    <td>Bluetooth <i class="fa-solid fa-check"></i></td>
                    <td>Bordcomputer <i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                    <td>CD-Spieler <i class="fa-solid fa-check"></i></td>
                    <td>Elektr. Fensterheber <i class="fa-solid fa-check"></i></td>
                    </tr>
                    <tr>
                    <td colspan= "2"><!--In bearbeitund-->
                    <p class="mb-0">
                        <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Mehr anzeigen
                        </a>
                    </p>
                    </td>
                    </tr>
                    <div class="collapse" id="collapseExample">
                        <tr>
                        <td>Elektr. Seitenspiegel <i class="fa-solid fa-check"></i></td>
                        <td>Elektr. Sitzeinstellung mit Memory-Funktion <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Elektr. Wegfahrsperre <i class="fa-solid fa-check"></i></td>
                        <td>ESP <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Fernlichtassistent <i class="fa-solid fa-check"></i></td>
                        <td>Freisprecheinrichtung <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Frontantrieb <i class="fa-solid fa-check"></i></td>
                        <td>Garantie <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Gepäckraumabtrennung <i class="fa-solid fa-check"></i></td>
                        <td>Geschwindigkeitsbegrenzer <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Induktionsladen für Smartphones <i class="fa-solid fa-check"></i></td>
                        <td>Innenspiegel autom. abblendend <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Inspektion neu <i class="fa-solid fa-check"></i></td>
                        <td>Isofix <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Lederlenkrad <i class="fa-solid fa-check"></i></td>
                        <td>LED-Scheinwerfer <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>LED-Tagfahrlicht <i class="fa-solid fa-check"></i></td>
                        <td>Leichtmetallfelgen <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Lichtsensor <i class="fa-solid fa-check"></i></td>
                        <td>Lordosenstütze <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Müdigkeitswarner <i class="fa-solid fa-check"></i></td>
                        <td>Multifunktionslenkrad <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Navigationssystem <i class="fa-solid fa-check"></i></td>
                        <td>Navigationsvorbereitung <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Nichtraucher-Fahrzeug <i class="fa-solid fa-check"></i></td>
                        <td>Notbremsassistent <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Notrufsystem <i class="fa-solid fa-check"></i></td>
                        <td>Pannenkit <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Radio DAB <i class="fa-solid fa-check"></i></td>
                        <td>Raucherpaket <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Regensensor <i class="fa-solid fa-check"></i></td>
                        <td>Reifendruckkontrolle <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Schaltwippen <i class="fa-solid fa-check"></i></td>
                        <td>Servolenkung <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Sitzheizung <i class="fa-solid fa-check"></i></td>
                        <td>Soundsystem <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Sportfahrwerk <i class="fa-solid fa-check"></i></td>
                        <td>Sportpaket <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Sportsitze <i class="fa-solid fa-check"></i></td>
                        <td>Sprachsteuerung <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Spurhalteassistent <i class="fa-solid fa-check"></i></td>
                        <td>Start/Stopp-Automatik <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Touchscreen <i class="fa-solid fa-check"></i></td>
                        <td>Traktionskontrolle <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Tuner/Radio <i class="fa-solid fa-check"></i></td>
                        <td>Umklappbarer Beifahrersitz <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>USB <i class="fa-solid fa-check"></i></td>
                        <td>Verkehrszeichenerkennung <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>Volldigitales Kombiinstrument <i class="fa-solid fa-check"></i></td>
                        <td>Winterpaket <i class="fa-solid fa-check"></i></td>
                        </tr>
                        <tr>
                        <td>WLAN / Wifi Hotspot <i class="fa-solid fa-check"></i></td>
                        <td>Zentralverrigelung <i class="fa-solid fa-check"></i></td>
                        </tr>
                    </div>
                </table>
            </ul>
        </div>
        <div class="col-xl-5">
            <ul class="list-group">
                <h5>Standort</h5>
            </ul>
        </div>
    </div>  
</section>
<?php require_once(__DIR__."/templates/footer.php"); ?>