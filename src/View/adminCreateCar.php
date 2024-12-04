<?php 
use App\Helper\Alert; 
?>
<section class="container py-5">
    <div class="row g-4">
        <!-- Zahlungsformular -->
        <div class="col-xl-7">
            <h3>Fahrzeug hinzufügen</h3>
            <?= Alert::getAlerts() ?>
            <form method="post" enctype="multipart/form-data">
                <div class="row g-4">
                    <div class="col-6">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="col-6">
                        <label for="location" class="form-label">Standort:</label>
                        <select name="location" id="location" class="form-select" required>
                            <option value="none" disabled selected>Nicht ausgewählt</option>
                            <?php foreach ($locations as $location) {?>
                                <option value="<?= $location["locationid"]?>"> <?= $location["postleitzahl"]." ".$location["ort"]  ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="price" class="form-label">Preis:</label>
                        <input type="number" name="price" class="form-control" id="price" min="0" step="0.01" required>
                    </div>
                    <div class="col-4">
                        <label for="type" class="form-label">Typ:</label>
                        <select name="type" id="type" class="form-select" required>
                            <option value="none" disabled selected>Nicht ausgewählt</option>
                            <?php foreach ($types as $type) {?>
                                <option value="<?= $type["typeId"]?>"> <?= $type["name"] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="persons" class="form-label">Personen:</label>
                        <input type="number" name="persons" class="form-control" id="persons" min="1" required>
                    </div>
                    <div class="col-4">
                        <label for="doors" class="form-label">Türen:</label>
                        <input type="text" name="doors" class="form-control" id="doors" placeholder="4/5" required>
                    </div>
                    <div class="col-4">
                        <label for="luggage" class="form-label">Koffer:</label>
                        <input type="number" name="luggage" class="form-control" id="luggage" min="0" required>
                    </div>
                    <div class="col-4">
                        <label for="airconditioning" class="form-label">Klimaanlage:</label>
                        <select name="airconditioning" id="airconditioning" class="form-select" required>
                            <option value="none" disabled selected>Nicht ausgewählt</option>
                            <option value="0"> nein </option>
                            <option value="1"> ja </option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="fuel" class="form-label">Kraftstoff:</label>
                        <select name="fuel" id="fuel" class="form-select" required>
                            <option value="none" disabled selected>Nicht ausgewählt</option>
                            <option value="Benzin">Benzin</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Elektro">Elektro</option>
                            <option value="Hybrid">Hybrid</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="gear" class="form-label">Getriebe:</label>
                        <select name="gear" id="gear" class="form-select" required>
                            <option value="none" disabled selected>Nicht ausgewählt</option>
                            <option value="Schaltgetriebe">Schaltgetriebe</option>
                            <option value="Automatikgetriebe">Automatikgetriebe</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="consumption" class="form-label">Verbrauch:</label>
                        <input type="number" name="consumption" class="form-control" id="consumption" min="1" step="0.01" required>
                    </div>
                    <div class="col-4">
                        <label for="kw" class="form-label">KW:</label>
                        <input type="number" name="kw" class="form-control" id="kw" min="1" required>
                    </div>
                    <div class="col-4">
                        <label for="ps" class="form-label">PS:</label>
                        <input type="number" name="ps" class="form-control" id="ps" min="1" required>
                    </div>
                    <div class="col-4">
                        <label for="mileage" class="form-label">Kilometerstand:</label>
                        <input type="number" name="mileage" class="form-control" id="mileage" min="0"required>
                    </div>
                    <div class="col-4">
                        <label for="minimumage" class="form-label">Mindestalter:</label>
                        <input type="number" name="minimumage" class="form-control" id="minimumage" min="18"required>
                    </div>
                    <div class="col-4">
                        <label for="drivinglicense" class="form-label">Führerscheinklasse:</label>
                        <select name="drivinglicense" id="drivinglicense" class="form-select" required>
                            <option value="none" disabled selected>Nicht ausgewählt</option>
                            <option value="b">B</option>
                            <option value="b197">B197</option>
                            <option value="b1">B1</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="picture" class="form-label">Bild:</label>
                        <input type="file" name="picture" class="form-control" id="picture" accept="image/png, image/jpg, image/jpeg" required>
                    </div>
                    <div class="col-4">
                        <button class="btn-primary btn" type="submit"> Anlegen <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</section>