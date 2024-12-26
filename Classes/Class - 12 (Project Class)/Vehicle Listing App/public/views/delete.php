<?php
require_once __DIR__ . '/../app/Classes/FileHandler.php';
require_once __DIR__ . '/../app/Classes/VehicleActions.php';
require_once __DIR__ . '/../app/Classes/VehicleBase.php';
require_once __DIR__ . '/../app/Classes/VehicleManager.php';

use App\Classes\VehicleManager;

$vehicleManager = new VehicleManager('', '', '', '');
$id = $_GET['id'] ?? '';
$vehicles = $vehicleManager->getVehicles();
$vehicle = array_filter($vehicles, fn($v) => $v['id'] === $id);
$vehicle = array_values($vehicle)[0] ?? null;

if (!$vehicle) {
    echo "Vehicle not found!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vehicleManager->deleteVehicle($id);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Vehicle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Delete Vehicle</h1>
    <p>Are you sure you want to delete "<?= $vehicle['name'] ?>"?</p>
    <form method="POST" action="">
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
