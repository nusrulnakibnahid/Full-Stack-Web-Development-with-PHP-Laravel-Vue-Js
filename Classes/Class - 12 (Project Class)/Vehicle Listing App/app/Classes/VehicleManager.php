<?php
// VehicleManager.php - Concrete class managing vehicle data
namespace App\Classes;

class VehicleManager extends VehicleBase implements VehicleActions {
    use FileHandler;

    // Constructor to initialize VehicleManager
    public function __construct($name, $type, $price, $image) {
        parent::__construct($name, $type, $price, $image);
    }

    // Add a new vehicle
    public function addVehicle($data) {
        $vehicles = $this->readFromFile();
        $data['id'] = uniqid(); // Ensure unique ID for each vehicle
        $vehicles[] = $data; // Add new vehicle to the list
        $this->writeToFile($vehicles); // Save back to file
    }

    // Edit an existing vehicle
    public function editVehicle($id, $data) {
        $vehicles = $this->readFromFile();
        $found = false;
        foreach ($vehicles as &$vehicle) {
            if ($vehicle['id'] === $id) {
                $vehicle = array_merge($vehicle, $data); // Update vehicle data
                $found = true;
                break;
            }
        }
        if ($found) {
            $this->writeToFile($vehicles); // Save updates
        } else {
            throw new \Exception("Vehicle with ID $id not found.");
        }
    }

    // Delete a vehicle by ID
    public function deleteVehicle($id) {
        $vehicles = $this->readFromFile();
        $filteredVehicles = array_filter($vehicles, fn($vehicle) => $vehicle['id'] !== $id);
        if (count($vehicles) === count($filteredVehicles)) {
            throw new \Exception("Vehicle with ID $id not found.");
        }
        $this->writeToFile($filteredVehicles); // Save filtered list
    }

    // Retrieve all vehicles
    public function getVehicles() {
        return $this->readFromFile();
    }

    // Get details of the current vehicle
    public function getDetails() {
        return "Name: $this->name, Type: $this->type, Price: $this->price";
    }
}
