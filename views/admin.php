<?php require_once(__DIR__."/templates/header.php"); ?>

<section class="container py-5">
    <h3> Administration </h3>
    <h6> Angelegte Fahrzeuge: </h6>
    <p><a href="ad-car.php?ad-car=1" class="btn btn-outline-secondary ms-2"> Fahrzeug hinzufügen</a></p>
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
        <tr>
        <th scope="row">19</th>
        <td> VW-Golf </td>
        <td> <span class="badge text-bg-success">Verfügbar</span> </td>
        <td> <p><a class="link-opacity-75" href="caredit.php">Bearbeiten</a></p> </td>
        </tr>
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

<?php require_once(__DIR__."/templates/footer.php"); ?>