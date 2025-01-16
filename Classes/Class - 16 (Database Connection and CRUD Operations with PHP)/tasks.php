<?php

// Database Configurations
$serverName = "localhost"; // Database server name
$userName = "root"; // Database username
$password = ""; // Database password
$dbName = "task_app"; // Database name

// Database Connection
$conn = new mysqli($serverName, $userName, $password, $dbName);

// Debugging: Print connection object
echo "<pre>";
print_r($conn);
echo "<pre>";

// Check connection
if (!$conn) {
    die($conn->connect_error); // Stop execution if the connection fails
}

// Task Validation
function validateTask($title) {
    // Check if the task title is empty
    if (empty($title)) {
        echo "Task cannot be empty <br>";
        return false;
    }

    // Check if the task already exists in the database
    global $conn; // Use global to access the $conn object
    $sql = "SELECT COUNT(*) as count FROM tasks WHERE title = '$title'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($row['count'] > 0) {
        echo "Task already exists <br>";
        return false;
    }

    return true; // Task is valid
}

// 1. Add a Task with validation
$title = "Task 22"; // Task title
$description = "Description 2"; // Task description
$priority = "high"; // Task priority

if (validateTask($title)) {
    // SQL to add a new task
    $addTaskSql = "INSERT INTO tasks(title, description, priority) VALUES('$title', '$description', '$priority')";

    // Execute query and check if the task is added
    if ($conn->query($addTaskSql)) {
        echo "Task added successfully <br>";
    } else {
        echo "Error adding task";
    }
}

// 2. Get a Single Task by ID
$singleTaskId = 20; // ID of the task to fetch
$singleTaskSql = "SELECT * FROM tasks WHERE id = $singleTaskId";
$singleTaskResult = $conn->query($singleTaskSql);

// Debugging: Output the raw result object
var_dump($singleTaskResult);

echo "Reading Single Task <br>";
if ($singleTaskResult->num_rows > 0) {
    $row = $singleTaskResult->fetch_assoc();
    echo "ID: {$row['id']}, Title: {$row['title']}, Description: {$row['description']}, Priority: {$row['priority']} <br>";
} else {
    echo "Task not found <br>";
}

// 3. Read All Tasks
$readTasksSql = "SELECT * FROM tasks"; // SQL to fetch all tasks
$result = $conn->query($readTasksSql);

echo "Reading all tasks <br>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: {$row['id']}, Title: {$row['title']}, Description: {$row['description']}, Priority: {$row['priority']}, Created At: {$row['created_at']} <br>";
    }
} else {
    echo "No tasks found <br>";
}

// 4. Update (Edit) a Task by ID
$updateTaskId = 2; // ID of the task to update
$newTitle = "Updated Task 2"; // New task title
$newDescription = "Updated Description 2"; // New task description
$newPriority = "medium"; // New task priority
$isCompleted = 1; // Mark task as completed

if (validateTask($newTitle)) {
    // SQL to update the task
    $editTaskSql = "UPDATE tasks SET title = '$newTitle', description = '$newDescription', priority = '$newPriority', is_completed = '$isCompleted' WHERE id = $updateTaskId";

    // Execute query and check if the task is updated
    if ($conn->query($editTaskSql)) {
        echo "Task updated successfully <br>";
    } else {
        echo "Error updating task";
    }
}

// 5. Delete a Task by ID
$deleteTaskId = 2; // ID of the task to delete
$deleteTaskSql = "DELETE FROM tasks WHERE id = $deleteTaskId";

if ($conn->query($deleteTaskSql)) {
    echo "Task deleted successfully <br>";
} else {
    echo "Error deleting task";
}

// 6. Filter Tasks Based on Priority
$priorityFilter = "high"; // Priority to filter tasks
$priorityFilterSql = "SELECT * FROM tasks WHERE priority = '$priorityFilter'";
$filteredResult = $conn->query($priorityFilterSql);

echo "Reading tasks based on Priority <br>";
if ($filteredResult->num_rows > 0) {
    while ($row = $filteredResult->fetch_assoc()) {
        echo "ID: {$row['id']}, Title: {$row['title']}, Description: {$row['description']}, Priority: {$row['priority']} <br>";
    }
} else {
    echo "No tasks found <br>";
}

// 7. Get Tasks by Date Range
$startRange = "2025-01-05"; // Start date
$endRange = "2025-01-10 23:59:59"; // End date

$dateRangeSql = "SELECT * FROM tasks WHERE created_at BETWEEN '$startRange' AND '$endRange'";
$dateRangeResult = $conn->query($dateRangeSql);

echo "Reading tasks based on Date Range <br>";
if ($dateRangeResult->num_rows > 0) {
    while ($row = $dateRangeResult->fetch_assoc()) {
        echo "ID: {$row['id']}, Title: {$row['title']}, Description: {$row['description']}, Created At: {$row['created_at']} <br>";
    }
} else {
    echo "There is no task between this date range";
}

// Close the database connection
$conn->close();
?>