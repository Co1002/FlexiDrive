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
                    <li class="list-group-item">Von:</li>
                    <li class="list-group-item">Bis:</li>
                    <li class="list-group-item">Insgesamte Tage:</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <h3> <i class="fa-solid fa-rotate-right"></i></i> Kommende Buchungen </h3>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div clas="col">
            <div class="card shadow-sm"> 
                <img src="assets/images/categories/pkw.png" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">VW-Golf</h5>
                    <p class="card-text">Dieses Wagen haben sie bestellt.</p>
                    <a href="#" class="btn btn-outline-danger"><i class="fa-regular fa-circle-xmark"></i> Stornieren</a>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Von:</li>
                    <li class="list-group-item">Bis:</li>
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
                <li class="list-group-item">Von:</li>
                <li class="list-group-item">Bis:</li>
                <li class="list-group-item">Insgesamte Tage:</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php require_once(__DIR__."/templates/footer.php"); ?>