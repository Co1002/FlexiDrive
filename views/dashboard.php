<?php require_once(__DIR__."/templates/header.php"); ?>

<section class="container py-5">
    <h3> <i class="fa-regular fa-clock"></i> Laufende Buchungen</h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm"> 
                <img src="assets/images/categories/pkw.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">VW-Golf</h5>
                    <p class="card-text">Diese Bestellung ist am laufen.</p>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Von: <?= date("d.m.y", strtotime($_SESSION["filterStart"])) ?></li>
                    <li class="list-group-item">Bis: <?= date("d.m.y", strtotime($_SESSION["filterEnd"])) ?></li>
                    <li class="list-group-item">Insgesamte Tage:</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <h3> <i class="fa-solid fa-rotate-right"></i> Kommende Buchungen </h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div clas="col">
            <div class="card shadow-sm"> 
                <img src="assets/images/categories/pkw.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">VW-Golf</h5>
                    <p class="card-text">Dieses Wagen haben sie bestellt.</p>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-regular fa-circle-xmark"></i> Stornieren</button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-triangle-exclamation"></i> Achtung</h5>
                                </div>
                                <div class="modal-body"> Sind sie sich sicher, dass Sie die Buchung stornieren wollen?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Stornieren</button>
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Zurück</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Von: <?= date("d.m.y", strtotime($_SESSION["filterStart"])) ?></li>
                        <li class="list-group-item">Bis: <?= date("d.m.y", strtotime($_SESSION["filterEnd"])) ?></li>
                        <li class="list-group-item">Insgesamte Tage:</li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
</section>
<section class="container py-5">
    <h3> <i class="fa-solid fa-lock"></i></i> Abgeschlossene Buchungen</h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div clas="col">
            <div class="card shadow-sm"> 
                <div class="card-body">
                    <h5 class="card-title">VW-Golf</h5>
                    <p class="card-text">Diese Bestellung wurde abgeschlossen.</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Von: <?= date("d.m.y", strtotime($_SESSION["filterStart"])) ?></li>
                <li class="list-group-item">Bis: <?= date("d.m.y", strtotime($_SESSION["filterEnd"])) ?></li>
                <li class="list-group-item">Insgesamte Tage:</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php require_once(__DIR__."/templates/footer.php"); ?>