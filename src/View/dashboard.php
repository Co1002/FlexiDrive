<?php
use App\Helper\Alert;
?>

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<section class="container py-5">
    <?= Alert::getAlerts() ?>
    <h3> <i class="fa-regular fa-clock"></i> Laufende Vermietung</h3>
    <?php if($userBookingsCurrent == null){ ?>
    <p class="fst-italic"><small>Keine laufenden Vermietungen</small></p>
    <?php }else{ ?>
    <div class="owl-carousel owl-theme">
        <?php foreach($userBookingsCurrent as $booking){ ?>
        <div class="item">
            <div class="card shadow-sm"> 
                <img src="assets/images/cars/<?= $booking["bild"] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $booking["name"] ?></h5>
                    <p class="card-text"><?= $booking["postleitzahl"] ?> <?= $booking["ort"] ?></p>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Von: <?= date("d.m.y", strtotime($booking["von"])) ?></li>
                    <li class="list-group-item">Bis: <?= date("d.m.y", strtotime($booking["bis"])) ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</section>
<section class="container">
    <h3> <i class="fa-solid fa-rotate-right"></i> Kommende Vermietungen </h3>
    <?php if($userBookingsFuture == null){ ?>
    <p class="fst-italic"><small>Keine kommenden Vermietungen</small></p>
    <?php }else{ ?>
    <div class="owl-carousel owl-theme">
        <?php $i=0; foreach($userBookingsFuture as $booking){ ?>
        <div class="item">
            <div class="card shadow-sm"> 
                <img src="assets/images/cars/<?= $booking["bild"] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $booking["name"] ?></h5>
                    <p class="card-text"><?= $booking["postleitzahl"] ?> <?= $booking["ort"] ?></p>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $i ?>"><i class="fa-regular fa-circle-xmark"></i> Stornieren</button>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Von: <?= date("d.m.y", strtotime($booking["von"])) ?></li>
                        <li class="list-group-item">Bis: <?= date("d.m.y", strtotime($booking["bis"])) ?></li>
                    </ul>
                </div>  
            </div>
        </div>
        <?php $i++; } ?>
    </div>
    <?php $i=0; foreach($userBookingsFuture as $booking){ ?>
    <div class="modal fade" id="staticBackdrop<?= $i ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop<?= $i ?>Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fa-solid fa-triangle-exclamation"></i> Achtung</h5>
                </div>
                <div class="modal-body"> Sind sie sich sicher, dass Sie die Buchung stornieren wollen?
                </div>
                <div class="modal-footer">
                    <form method="post">
                        <input type="hidden" name="bookingId" value="<?= $booking["bookingId"] ?>">
                        <button type="submit" name="removeBooking" class="btn btn-outline-danger" data-bs-dismiss="modal">Stornieren</button>
                    </form>
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Zurück</button>
                </div>
            </div>
        </div>
    </div>
    <?php $i++; } } ?>
</section>
<section class="container py-5">
    <h3> <i class="fa-solid fa-lock"></i></i> Abgeschlossene Vermietungen</h3>
    <?php if($userBookingsPast == null){ ?>
    <p class="fst-italic"><small>Keine abgeschlossenen Vermietungen</small></p>
    <?php }else{ ?>
    <div class="owl-carousel owl-theme">
        <?php foreach($userBookingsPast as $booking){ ?>
        <div class="item">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= $booking["name"] ?></h5>
                    <p class="card-text"><?= $booking["postleitzahl"] ?> <?= $booking["ort"] ?></p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Von: <?= date("d.m.y", strtotime($booking["von"])) ?></li>
                <li class="list-group-item">Bis: <?= date("d.m.y", strtotime($booking["bis"])) ?></li>
                </ul>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</section>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

<script>
$('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    autoplay:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
</script>