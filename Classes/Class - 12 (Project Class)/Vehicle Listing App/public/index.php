<?php
require_once __DIR__ . '/../app/Classes/FileHandler.php';
require_once __DIR__ . '/../app/Classes/VehicleActions.php';
require_once __DIR__ . '/../app/Classes/VehicleBase.php';
require_once __DIR__ . '/../app/Classes/VehicleManager.php';

use App\Classes\VehicleManager;

$vehicleManager = new VehicleManager('', '', '', '');
$vehicles = $vehicleManager->getVehicles();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Listing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Vehicle Listing</h1>
    <div class="row">
        <?php foreach ($vehicles as $vehicle): ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= $vehicle['image'] ?>" class="card-img-top" alt="<?= $vehicle['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title">Name: <?= $vehicle['name'] ?></h5>
                        <p class="card-text">Type: <?= $vehicle['type'] ?></p>
                        <p class="card-text">Price: <?= $vehicle['price'] ?></p>
                        <a href="edit.php?id=<?= $vehicle['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="delete.php?id=<?= $vehicle['id'] ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
