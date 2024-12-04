<?php
use App\Helper\Alert; 
?>
<section class="container py-5">
    <div class="row g-4">
        <!-- Zahlungsformular -->
        <div class="col-xl-7">
            <h3>Fahrzeug bearbeiten</h3>
            <?= Alert::getAlerts() ?>
            <form method="post">
                <div class="row g-4">
                    <div class="col-6">
                        <label for="price" class="form-label">Preis:</label>
                        <input type="number" name="price" class="form-control" id="price" value="<?= $car["preis"]?>" required>
                   
                    </div>
                    <div class="col-6">
                        <label for="mileage" class="form-label">Kilometerstand:</label>
                        <input type="number" name="mileage" class="form-control" id="mileage" value="<?= $car["km"]?>"required>
                    </div>
                    <div class="col-4">
                        <button type="submit" name="updateCar" class="btn btn-outline-primary"> Aktualisieren <i class="fa-solid fa-arrow-right"></i> </button>
                    </div> 
                </div>
            </form>
            <button type="button" class="btn btn-outline-danger mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Fahrzeug Löschen <i class="fa-solid fa-trash"></i></button>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-triangle-exclamation"></i> Achtung</h5>
                        </div>
                        <div class="modal-body"> Sind sie sich sicher, dass Sie dieses Fahrzeug löschen wollen?
                        </div>
                        <div class="modal-footer">
                            <form method="post">
                                <button type="submit" name="deleteCar" class="btn btn-outline-danger" data-bs-dismiss="modal">Löschen <i class="fa-solid fa-trash"></i></button>
                            </form>
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Zurück</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</section>
