<?php require_once(__DIR__."/templates/header.php"); ?>

<section class="container py-5">
    <div class="card mx-auto mx-3" style="max-width: 400px;">
        <div class="card-header">Anmelden</div>
        <div class="card-body">
            <?= Alert::getAlerts() ?>
            <form method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Passwort:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary w-100">Anmelden</button>
            </form>
            <p class="mb-0 mt-3">Noch kein Account? <a href="register.php">Registrieren!</a></p>
        </div>
    </div>
</section>

<?php require_once(__DIR__."/templates/footer.php"); ?>