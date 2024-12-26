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
    $data = [
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'image' => $_POST['image']
    ];
    $vehicleManager->editVehicle($id, $data);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vehicle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Vehicle</h1>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Vehicle Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $vehicle['name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Vehicle Type</label>
            <input type="text" class="form-control" id="type" name="type" value="<?= $vehicle['type'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="<?= $vehicle['price'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="image" name="image" value="<?= $vehicle['image'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
</body>
</html>
