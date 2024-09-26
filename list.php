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
                    <li class="breadcrumb-item"><a href="/">Startseite</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Angebote</li>
                </ol>
            </div>
        </nav>
    </header>

    <main class="min-vh-100 bg-body-tertiary">

        <section class="container py-5">
            <div class="row">
                <!-- Filter -->
                <div class="col-md-4 col-lg-3">

                </div>
                <!-- Liste -->
                <div class="col-md-8 col-lg-9">

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