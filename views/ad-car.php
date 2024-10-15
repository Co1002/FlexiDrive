<?php require_once(__DIR__."/templates/header.php"); ?>

<section class="container py-5">
    <div class="row g-4">
        <!-- Zahlungsformular -->
        <div class="col-xl-7">
            <h3>Fahrzeug hinzufügen</h3>
            <?= Alert::getAlerts() ?>
            <form method="post">
                <div class="row g-4">
                    <div class="col-6">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="col-6">
                        <label for="location" class="form-label">Standort:</label>
                        <input type="text" name="location" class="form-control" id="location" required>
                    </div>
                    <div class="col-4">
                        <label for="price" class="form-label">Preis:</label>
                        <input type="number" name="price" class="form-control" id="price" required>
                    </div>
                    <div class="col-4">
                        <label for="type" class="form-label">Typ:</label>
                        <input type="text" name="type" class="form-control" id="type" required>
                    </div>
                    <div class="col-4">
                        <label for="persons" class="form-label">Personen:</label>
                        <input type="number" name="persons" class="form-control" id="persons" required>
                    </div>
                    <div class="col-4">
                        <label for="doors" class="form-label">Türen:</label>
                        <input type="text" name="doors" class="form-control" id="doors" required>
                    </div>
                    <div class="col-4">
                        <label for="luggage" class="form-label">Koffer:</label>
                        <input type="number" name="luggage" class="form-control" id="luggage" required>
                    </div>
                    <div class="col-4">
                        <label for="airconditioning" class="form-label">Klimaanlage:</label>
                        <input type="text" name="airconditioning" class="form-control" id="airconditioning" required>
                    </div>
                    <div class="col-6">
                        <label for="fuel" class="form-label">Kraftstoff:</label>
                        <input type="text" name="fuel" class="form-control" id="fuel" required>
                    </div>
                    <div class="col-6">
                        <label for="gear" class="form-label">Getriebe:</label>
                        <input type="text" name="gear" class="form-control" id="gear" required>
                    </div>
                    <div class="col-4">
                        <label for="consumption" class="form-label">Verbrauch:</label>
                        <input type="number" name="consumption" class="form-control" id="consumption" required>
                    </div>
                    <div class="col-4">
                        <label for="kw" class="form-label">KW:</label>
                        <input type="number" name="kw" class="form-control" id="kw" required>
                    </div>
                    <div class="col-4">
                        <label for="ps" class="form-label">PS:</label>
                        <input type="number" name="ps" class="form-control" id="ps" required>
                    </div>
                    <div class="col-4">
                        <label for="mileage" class="form-label">Kilometerstand:</label>
                        <input type="number" name="mileage" class="form-control" id="mileage" required>
                    </div>
                    <div class="col-4">
                        <label for="minimumage" class="form-label">Mindestalter:</label>
                        <input type="number" name="minimumage" class="form-control" id="minimumage" required>
                    </div>
                    <div class="col-4">
                        <label for="drivinglicense" class="form-label">Führerscheinklasse:</label>
                        <input type="text" name="drivinglicense" class="form-control" id="drivinglicense" required>
                    </div>
                    <div class="col-12">
                        <label for="picture" class="form-label">Bild:</label>
                        <input type="file" name="picture" class="form-control" id="picture">
                    </div>
                    <div class="col-4">
                        <p><a href="admin.php?adminId=1"class="btn btn-primary"> Anlegen <i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</section>
<?php require_once(__DIR__."/templates/footer.php"); ?>