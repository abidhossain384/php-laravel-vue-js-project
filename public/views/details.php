<?php

require_once "../../app/classes/VehicleManager.php";
$vehicleManager = new VehicleManager("", "", "", "");

$id = $_GET['id'];

if($id === null) {
    header("Location: ../index.php");
    exit;
}

$vehicle = $vehicleManager->getDetails($id);

include './header.php';
?>

<div class="container my-4">
    <h1><?= htmlspecialchars($vehicle['name']) ?></h1>
    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <img src="<?= $vehicle['image'] ?>" class="card-img-top" style="height: 400px; object-fit: cover;">
                    <div class="card-body">
                        <p class="card-text">Type: <?= htmlspecialchars($vehicle['type']) ?></p>
                        <p class="card-text">Price: $<?= htmlspecialchars($vehicle['price']) ?></p>
                    </div>
                </div>
            </div>
    </div>
</div>

</body>
</html>
