<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexiDrive</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <header>
        <nav class="navbar bg-primary" data-bs-theme="dark">
            <div class="container">
                <h1 class="navbar-brand mb-0">FlexiDrive</h1>
                <div class="d-flex">
                    <a href="/login" class="btn btn-outline-light">Login</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="min-vh-100 bg-body-tertiary">
        <div class="py-5 border-bottom">
            <div class="container">
                <h2 class="display-2 mt-5 ps-2">FlexiDrive</h2>
                <p class="mb-5 ps-2 fst-italic text-secondary">Deine Freiheit, dein Weg.</p>
            </div>
        </div>
    </main>
    <footer class="bg-primary-subtle">
        <p class="mb-0 py-2 text-center text-secondary">© <?= date("Y") ?> - All rights reserved</p>
    </footer>
</body>
</html>