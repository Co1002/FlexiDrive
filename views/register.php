<?php require_once(__DIR__."/templates/header.php"); ?>

<section class="container py-5">
    <div class="card mx-auto mx-3" style="max-width: 600px;">
        <div class="card-header">Registrieren</div>
        <div class="card-body">
            <?= Alert::getAlerts() ?>
            <form method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Vorname:</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Nachname:</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="password" class="form-label">Passwort:</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button type="submit" name="register" class="btn btn-primary w-100">Registrieren</button>
            </form>
            <p class="mb-0 mt-3">Bereits ein Account? <a href="login.php">Anmelden!</a></p>
        </div>
    </div>
</section>

<?php require_once(__DIR__."/templates/footer.php"); ?>