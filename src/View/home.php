<?php
use App\Helper\Alert;
?>

<section class="py-5 border-bottom" id="image-hero">
    <div class="container ps-4 py-5">
        <h2 class="display-2 m-0 text-white">FlexiDrive</h2>
        <p class="m-0 fst-italic text-light">Deine Freiheit, dein Weg.</p>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="card bg-body-tertiary border-0 shadow" style="transform: translateY(-30px);">
            <div class="card-body">
                <?= Alert::getAlerts() ?>
                <form method="post">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4">
                            <label for="datetimes" class="form-label">Zeitraum:</label>
                            <input type="text" class="form-control" name="datetimes" id="datetimes" readonly>
                            <input type="hidden" name="startDate" id="startDate" value="<?= $startDate ?>">
                            <input type="hidden" name="endDate" id="endDate" value="<?= $endDate ?>">
                        </div>
                        <div class="col-lg-4 col-6">
                            <label for="location" class="form-label">Standort:</label>
                            <select name="location" id="location" class="form-select">
                                <?php if($locations != null){ foreach($locations as $loc){ ?>
                                <option value="<?= $loc["ort"] ?>" <?php if($location == $loc["ort"]){echo "selected";} ?>><?= $loc["postleitzahl"] ?> <?= $loc["ort"] ?></option>
                                <?php } } ?>
                            </select>
                        </div>
                        <div class="col-lg-4 col-6">
                            <label for="type" class="form-label">Fahrzeugtyp:</label>
                            <select name="type" id="type" class="form-select">
                                <option value="pkw" <?php if($type == "pkw"){ echo "selected"; } ?>>PKW</option>
                                <option value="transporter" <?php if($type == "transporter"){ echo "selected"; } ?>>Transporter</option>
                                <option value="wohnmobil" <?php if($type == "wohnmobil"){ echo "selected"; } ?>>Wohnmobil</option>
                                <option value="sportwagen" <?php if($type == "sportwagen"){ echo "selected"; } ?>>Sportwagen</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-12">
                            <button type="submit" class="btn btn-primary w-100" onclick="loadBtn(this)"><i class="fa-solid fa-magnifying-glass"></i> Suchen</button>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</section>

<section class="container my-5">
    <h3 class="text-center mb-4">Unsere Vorteile:</h3>
    <div class="row g-4 justify-content-center align-items-stretc">
        <div class="col-md-6 col-xl-4">
            <div class="card h-100" data-aos="fade-up" data-aos-delay="0">
                <div class="card-body">
                    <h3 class="text-center text-primary"><i class="fa-solid fa-hand-holding-dollar"></i></h3>
                    <h5 class="card-title text-center">Beste Preise</h5>
                    <p>Bei uns erhalten Sie das passende Fahrzeug zu einem Top-Preis. Ob kurz oder lang, wir bieten flexible Mietoptionen für jeden Bedarf.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card h-100" data-aos="fade-up" data-aos-delay="50">
                <div class="card-body">
                    <h3 class="text-center text-primary"><i class="fa-solid fa-life-ring"></i></h3>
                    <h5 class="card-title text-center">Erstklassiger Service</h5>
                    <p>Unser Service endet nicht bei der Fahrzeugübergabe. Wir stehen Ihnen rund um die Uhr zur Verfügung – bei Fragen oder unerwarteten Herausforderungen.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card h-100" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body">
                    <h3 class="text-center text-primary"><i class="fa-solid fa-list"></i></h3>
                    <h5 class="card-title text-center">Große Auswahl</h5>
                    <p>Von kleinen Cityflitzern bis zu geräumigen Transportern – bei uns finden Sie für jeden Anlass das passende Auto, ganz unkompliziert und schnell.</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <h3 class="text-center mb-4">Einfacher Ablauf:</h3>

    <div class="row g-4 justify-content-center align-items-stretc">
        <div class="col-md-6 col-xl-4 p-2">
            <div data-aos="fade-up" data-aos-delay="0">
                <h3 class="text-center text-primary"><i class="fa-solid fa-1"></i></h3>
                <h5 class="card-title text-center">Mitzeitraum und Fahrzeug auswählen</h5>
                <p class="text-center">Wählen Sie ihr Wunschfahrzeug aus unserem umfangreichen Fuhrpark aus.</p>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 p-2">
            <div data-aos="fade-up" data-aos-delay="50">
                <h3 class="text-center text-primary"><i class="fa-solid fa-2"></i></h3>
                <h5 class="card-title text-center">Buchung schnell und sicher abschließen</h5>
                <p class="text-center">Zahlen Sie direkt per Kreditkarte im Voraus, um Stress bei der Vermietung vorzubeugen.</p>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 p-2">
            <div data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-center text-primary"><i class="fa-solid fa-3"></i></h3>
                <h5 class="card-title text-center">Fahrzeug am gewählten Standort abholen</h5>
                <p class="text-center">Kommen Sie einfach am gewählten Mietstart zu der gewählten Filiale und fahren Sie los.</p>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <h3 class="text-center mb-4">Außerdem:</h3>

    <div class="row g-4 justify-content-center align-items-stretc">
        <div class="col-lg-6">
            <div class="card h-100" data-aos="fade-up" data-aos-delay="0">
                <div class="card-body">
                    <h3 class="text-primary d-inline-block"><i class="fa-solid fa-person-circle-question"></i> <h5 class="card-title d-inline-block ms-2 align-middle">FAQ</h5></h3>
                    <p>Haben Sie Fragen? Besuchen Sie unsere FAQ-Seite für schnelle Antworten zu Buchungen, Fahrzeugtypen, Zahlungsmethoden und vielem mehr. Wir haben die häufigsten Anfragen zusammengefasst, um Ihnen einen schnellen Überblick zu verschaffen und Ihre Mietanfrage noch einfacher zu gestalten.</p>
                    <a href="/faq" class="btn btn-primary">Zum FAQ <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card h-100" data-aos="fade-up" data-aos-delay="50">
                <div class="card-body">
                    <h3 class="text-primary d-inline-block"><i class="fa-solid fa-people-group"></i> <h5 class="card-title d-inline-block ms-2 align-middle">Über uns</h5></h3>
                    <p>Erfahren Sie mehr über die Geschichte und Vision von FlexiDrive. Besuchen Sie unsere „Über uns“-Seite, um mehr darüber zu erfahren, wie wir innovative Fahrzeugvermietungslösungen bieten, die flexibel und auf Ihre Bedürfnisse zugeschnitten sind.</p>
                    <a href="/aboutUs" class="btn btn-primary">Mehr erfahren <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/daterangepicker.min.js"></script>
<link rel="stylesheet" href="assets/css/daterangepicker.css">

<script>
function loadBtn(element){
    element.classList.add("disabled");
    element.innerHTML = '<span class="spinner-border spinner-border-sm" aria-hidden="true"></span><span role="status"> Suche...</span>';
}

if($("#startDate").val() == ""){
    $("#startDate").val((moment().startOf('day').add(1, 'day')).format('YYYY-MM-DD'));
}
if($("#endDate").val() == ""){
    $("#endDate").val((moment().startOf('day').add(3, 'day')).format('YYYY-MM-DD'));
}

$(function() {
  let start, end, min;
  if($("#startDate").val() == ""){
    start = moment().startOf('day').add(1, 'day');
  }else{
    start = moment($("#startDate").val(), "YYYY-MM-DD");
  }
  if($("#endDate").val() == ""){
    end = moment().startOf('day').add(3, 'day');
  }else{
    end = moment($("#endDate").val(), "YYYY-MM-DD");
  }
  min = moment().startOf('day').add(1, 'day');
  $('input[name="datetimes"]').daterangepicker({
    autoApply: true,
    startDate: start,
    endDate: end,
    minDate: min,
    locale: {
      format: 'DD/MM/YY'
    }
  }, function(start, end, label){
    $("#startDate").val(start.format('YYYY-MM-DD'));
    $("#endDate").val(end.format('YYYY-MM-DD'));
  });
});
</script>