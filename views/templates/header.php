<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FlexiDrive ist dein Anbieter, wenn es um Autovermietungen aller Art geht. Schaue dir gerne unsere Auwahl an und überzeuge dich selbst von unserem breit gefächertem Angebot!">
    <meta name="author" content="Colin, Oliver">
    <title><?php if(isset($title)){echo $title." • "; } ?>FlexiDrive</title>
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
                    <?php if(!isset($_SESSION["userId"])){ ?>
                    <a href="login.php" class="btn btn-outline-light me-2">Anmelden</a>
                    <a href="register.php" class="btn btn-light">Registrieren</a>
                    <?php } else{ ?>
                    <a href="userRents.php" class="btn btn-outline-light me-2">Mietübersicht</a>
                    <a href="logout.php" class="btn btn-outline-light"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    <?php } ?>
                </div>
            </div>
        </nav>
        <nav class="bg-primary-subtle">
            <div class="container py-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <?php 
                    if(isset($breadcrumb) && $breadcrumb != null){ $i = 0; foreach($breadcrumb as $name => $file){ if($i+1 != count($breadcrumb)){
                    ?>
                    <li class="breadcrumb-item"><a href="<?= $file ?>"><?= $name ?></a></li>
                    <?php } else{ ?>
                    <li class="breadcrumb-item active" aria-current="page"><?= $name ?></li>
                    <?php 
                    } $i++; } }
                    ?>
                </ol>
            </div>
        </nav>
    </header>

    <main class="min-vh-100 bg-body-tertiary">