<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FlexiDrive ist dein Anbieter, wenn es um Autovermietungen aller Art geht. Schaue dir gerne unsere Auwahl an und überzeuge dich selbst von unserem breit gefächertem Angebot!">
    <meta name="author" content="Colin, Oliver">
    <title>FlexiDrive</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container">
                <h1 class="navbar-brand mb-0">FlexiDrive</h1>
                <div class="d-flex">
                    <a href="/login" class="btn btn-outline-light me-2">Anmelden</a>
                    <a href="/login" class="btn btn-light">Registrieren</a>
                </div>
            </div>
        </nav>
        <nav class="bg-primary-subtle">
            <div class="container py-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Startseite</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Angebote</li>
                </ol>
            </div>
        </nav>
    </header>

    <main class="min-vh-100 bg-body-tertiary">

        <section class="container py-5">
            <div class="row g-4">
                <!-- Filter -->
                <div class="col-md-4 col-lg-3 border-end border-secondary-subtle">
                    <form method="get">
                        <div class="row row-cols-2 row-cols-md-1">
                            <div class="col">
                                <div class="form-check">
                                    <input type="radio" name="category" id="pkw" class="form-check-input" value="pkw" <?php if(isset($_GET["category"]) && $_GET["category"] == "pkw"){ echo "checked"; } ?>>
                                    <label class="form-check-label" for="pkw">PKW</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input type="radio" name="category" id="suv" class="form-check-input" value="suv" <?php if(isset($_GET["category"]) && $_GET["category"] == "suv"){ echo "checked"; } ?>>
                                    <label class="form-check-label" for="suv">SUV</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input type="radio" name="category" id="transporter" class="form-check-input" value="transporter" <?php if(isset($_GET["category"]) && $_GET["category"] == "transporter"){ echo "checked"; } ?>>
                                    <label class="form-check-label" for="transporter">Transporter</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input type="radio" name="category" id="wohnmobil" class="form-check-input" value="wohnmobil" <?php if(isset($_GET["category"]) && $_GET["category"] == "wohnmobil"){ echo "checked"; } ?>>
                                    <label class="form-check-label" for="wohnmobil">Wohnmobil</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input type="radio" name="category" id="sportwagen" class="form-check-input" value="sportwagen" <?php if(isset($_GET["category"]) && $_GET["category"] == "sportwagen"){ echo "checked"; } ?>>
                                    <label class="form-check-label" for="sportwagen">Sportwagen</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Filter anwenden</button>
                    </form>
                </div>
                <!-- Liste -->
                <div class="col-md-8 col-lg-9">
                    <div class="card">
                        <div class="row g-2">
                            <div class="col-sm-3 col-xl-4">
                                <img src="" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-9 col-xl-8">
                                <div class="card-body">
                                    <h5 class="card-title">Fahrzeug Titel</h5>
                                    <p class="text-secondary"><i class="fa-solid fa-gears"></i> Getriebeart <i class="fa-solid fa-users"></i> X Personen <i class="fa-solid fa-suitcase"></i> X Gepäckstücke</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-primary-subtle">
        <p class="mb-0 py-2 text-center text-secondary">© <?= date("Y") ?> - All rights reserved</p>
    </footer>

    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>