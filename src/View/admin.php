
<section class="container py-5">
    <h3> Administration </h3>
    <h6> Angelegte Fahrzeuge: </h6>
    <p><a href="<?= ROUTE_BASE ?>/admin/createCar" class="btn btn-outline-secondary ms-2"> Fahrzeug hinzufügen</a></p>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Bearbeiten</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($cars as $car){ ?>
        <tr>
        <th scope="row"><?= $car["carId"] ?></th>
        <td><?= $car["name"] ?></td>
        <?php if ($car['status'] == 'verfügbar') { ?>
             <td> <span class="badge text-bg-success">Verfügbar</span> </td>
        <?php } else { ?>
            <td> <span class="badge text-bg-danger ms-2">Belegt</span> </td>
        <?php } ?>
        <td> <p class="mb-0"><a class="link-opacity-75" href="<?= ROUTE_BASE ?>/admin/<?= $car["carId"] ?>">Bearbeiten</a></p> </td>
        </tr>
        <?php } ?>
        <tr>
        <th scope="row"></th>
        <td colspan="2"></td>
        <td></td>
        </tr>
    </tbody>
    </table>
</section>
