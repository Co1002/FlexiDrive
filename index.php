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
                    <li class="breadcrumb-item active" aria-current="page">Startseite</li>
                </ol>
            </div>
        </nav>
    </header>

    <main class="min-vh-100 bg-body-tertiary">

        <section class="py-5 border-bottom" id="image-hero">
            <div class="container ps-4 py-5">
                <h2 class="display-2 m-0 text-white">FlexiDrive</h2>
                <p class="m-0 fst-italic text-light">Deine Freiheit, dein Weg.</p>
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
    </main>

    <footer class="bg-primary-subtle">
        <p class="mb-0 py-2 text-center text-secondary">© <?= date("Y") ?> - All rights reserved</p>
    </footer>

    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>