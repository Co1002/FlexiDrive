<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FlexiDrive ist dein Anbieter, wenn es um Autovermietungen aller Art geht. Schaue dir gerne unsere Auwahl an und überzeuge dich selbst von unserem breit gefächertem Angebot!">
    <meta name="author" content="Colin, Oliver">

    <meta property="og:title" content="<?php if(isset($title)){echo $title." • "; } ?>FlexiDrive">
    <meta property="og:description" content="FlexiDrive - Deine Freiheit, dein Weg.">
    <meta property="og:image" content="https://<?=$_SERVER['HTTP_HOST']?>/assets/images/cover.jpg">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="1080">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:url" content="https://<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>">
    <meta property="og:type" content="website">

    <base href="<?= ROUTE_BASE ?>/">
    <title><?php if(isset($title)){echo $title." • "; } ?>FlexiDrive</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/custom.css?v=1.4">
</head>
<body class="d-flex flex-column min-vh-100 ">

    <header>
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container">
                <h1 class="navbar-brand mb-0" onclick="window.location = '<?= ROUTE_BASE ?>'" style="cursor:pointer;">FlexiDrive</h1>
                <div class="d-flex">
                    <?php if(!isset($_SESSION["userId"])){ ?>
                    <a href="<?= ROUTE_BASE ?>/user/login" class="btn btn-outline-light me-2">Anmelden</a>
                    <a href="<?= ROUTE_BASE ?>/user/register" class="btn btn-light">Registrieren</a>
                    <?php } else{ if(isset($_SESSION["admin"])){ ?>
                        <a href="<?= ROUTE_BASE ?>/admin" class="btn btn-outline-light me-2">Admin</a>
                    <?php } ?>
                    <a href="<?= ROUTE_BASE ?>/user/dashboard" class="btn btn-outline-light me-2">Übersicht</a>
                    <a href="<?= ROUTE_BASE ?>/user/logout" class="btn btn-outline-light"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    <?php } ?>
                </div>
            </div>
        </nav>
        <nav class="bg-primary-subtle">
            <div class="container py-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <?php 
                    if(isset($breadcrumb) && $breadcrumb != null){ $i = 0; foreach($breadcrumb as $name => $link){ if($i+1 != count($breadcrumb)){
                    ?>
                    <li class="breadcrumb-item"><a href="<?= ROUTE_BASE.$link ?>"><?= $name ?></a></li>
                    <?php } else{ ?>
                    <li class="breadcrumb-item active" aria-current="page"><?= $name ?></li>
                    <?php 
                    } $i++; } }
                    ?>
                </ol>
            </div>
        </nav>
    </header>

    <main class="bg-body-tertiary flex-fill">