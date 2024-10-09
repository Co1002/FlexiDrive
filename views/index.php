<?php require_once(__DIR__."/templates/header.php"); ?>

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
                    <div class="row g-4">
                        <div class="col-md-3 col-6">
                            <label for="startDate" class="form-label">Von:</label>
                            <input type="date" class="form-control" name="startDate" id="startDate" value="<?= $startDate ?>" required>
                        </div>
                        <div class="col-md-3 col-6">
                            <label for="endDate" class="form-label">Bis:</label>
                            <input type="date" class="form-control" name="endDate" id="endDate" value="<?= $endDate ?>" required>
                        </div>
                        <div class="col-md-3 col-6">
                            <label for="type" class="form-label">Typ:</label>
                            <select name="type" id="type" class="form-select">
                                <option value="pkw" <?php if($type == "pkw"){ echo "selected"; } ?>>PKW</option>
                                <option value="transporter" <?php if($type == "transporter"){ echo "selected"; } ?>>Transporter</option>
                                <option value="wohnmobil" <?php if($type == "wohnmobil"){ echo "selected"; } ?>>Wohnmobil</option>
                                <option value="sportwagen" <?php if($type == "sportwagen"){ echo "selected"; } ?>>Sportwagen</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-6">
                            <label class="form-label">Los:</label>
                            <button type="submit" name="mainSearch" class="btn btn-primary w-100"><i class="fa-solid fa-magnifying-glass"></i> Suchen</button>
                        </div>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="d-flex flex-wrap justify-content-around">
        <div class="categoryLink">
            <div class="categoryLinkImage">
                <img src="assets/images/categories/pkw.png" alt="pkw">
            </div>
            <p class="text-center">PKW</p>
            <a href="list.php" class="stretched-link"></a>
        </div>
        <div class="categoryLink">
            <div class="categoryLinkImage">
                <img src="assets/images/categories/suv.png" alt="suv">
            </div>
            <p class="text-center">SUV</p>
            <a href="list.php" class="stretched-link"></a>
        </div>
        <div class="categoryLink">
            <div class="categoryLinkImage">
                <img src="assets/images/categories/transporter.png" alt="transporter">
            </div>
            <p class="text-center">Transporter</p>
            <a href="list.php" class="stretched-link"></a>
        </div>
        <div class="categoryLink">
            <div class="categoryLinkImage">
                <img src="assets/images/categories/wohnmobil.png" alt="wohnmobil">
            </div>
            <p class="text-center">Wohnmobil</p>
            <a href="list.php" class="stretched-link"></a>
        </div>
        <div class="categoryLink">
            <div class="categoryLinkImage">
                <img src="assets/images/categories/sportwagen.png" alt="sportwagen">
            </div>
            <p class="text-center">Sportwagen</p>
            <a href="list.php" class="stretched-link"></a>
        </div>
    </div>
</section>

<section class="container my-5">
    <div class="row g-4 justify-content-center align-items-stretc">
        <div class="col-md-6 col-xl-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="text-center text-primary"><i class="fa-solid fa-hand-holding-dollar"></i></h3>
                    <h5 class="card-title text-center">Beste Preise</h5>
                    <p>Bei uns erhalten Sie das passende Fahrzeug zu einem Top-Preis. Ob kurz oder lang, wir bieten flexible Mietoptionen für jeden Bedarf.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="text-center text-primary"><i class="fa-solid fa-life-ring"></i></h3>
                    <h5 class="card-title text-center">Erstklassiger Service</h5>
                    <p>Unser Service endet nicht bei der Fahrzeugübergabe. Wir stehen Ihnen rund um die Uhr zur Verfügung – bei Fragen oder unerwarteten Herausforderungen.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card h-100">
                <div class="card-body">
                    <h3 class="text-center text-primary"><i class="fa-solid fa-list"></i></h3>
                    <h5 class="card-title text-center">Große Auswahl</h5>
                    <p>Von kleinen Cityflitzern bis zu geräumigen Transportern – bei uns finden Sie für jeden Anlass das passende Auto, ganz unkompliziert und schnell.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once(__DIR__."/templates/footer.php"); ?>