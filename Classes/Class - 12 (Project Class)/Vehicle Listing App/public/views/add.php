<?php
require_once __DIR__ . '/../app/Classes/FileHandler.php';
require_once __DIR__ . '/../app/Classes/VehicleActions.php';
require_once __DIR__ . '/../app/Classes/VehicleBase.php';
require_once __DIR__ . '/../app/Classes/VehicleManager.php';

use App\Classes\VehicleManager;

$vehicleManager = new VehicleManager('', '', '', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'image' => $_POST['image']
    ];
    $vehicleManager->addVehicle($data);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vehicle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Add Vehicle</h1>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Vehicle Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Vehicle Type</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Vehicle</button>
    </form>
</div>
</body>
</html>
