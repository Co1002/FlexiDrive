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
                        <label for="price" class="form-label">Preis:</label>
                        <input type="number" name="price" class="form-control" id="price" required>
                    </div>
                    <div class="col-6">
                        <label for="mileage" class="form-label">Kilometerstand:</label>
                        <input type="number" name="mileage" class="form-control" id="mileage" required>
                    </div>
                    <div class="col-4">
                        <p><a href="admin.php?adminId=1"class="btn btn-outline-primary"> Aktualisieren <i class="fa-solid fa-arrow-right"></i></a></p>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Fahrzeug Löschen <i class="fa-solid fa-trash"></i></button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-triangle-exclamation"></i> Achtung</h5>
                                </div>
                                <div class="modal-body"> Sind sie sich sicher, dass Sie dieses Fahrzeug löschen wollen?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Löschen <i class="fa-solid fa-trash"></i></button>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Zurück</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>  
</section>
<?php require_once(__DIR__."/templates/footer.php"); ?>