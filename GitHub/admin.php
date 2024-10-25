
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
        <th scope="row"><?php $car["carId"] ?></th>
        <td><?php $car["name"] ?></td>
        <td> <span class="badge text-bg-success">Verfügbar</span> </td>
        <td> <p><a class="link-opacity-75" href="<?= ROUTE_BASE ?>/admin/editCar">Bearbeiten</a></p> </td>
        </tr>
        <?php } ?>
        <tr>
        <th scope="row"></th>
        <td>  </td>
        <td> <span class="badge text-bg-danger">Gebucht</span> </td>
        <td></td>
        </tr>
        <tr>
        <th scope="row"></th>
        <td colspan="2"></td>
        <td></td>
        </tr>
    </tbody>
    </table>
</section>
