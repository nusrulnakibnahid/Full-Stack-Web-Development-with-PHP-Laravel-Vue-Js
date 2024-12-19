<?php

$folderName1 = "Students";

if (!file_exists($folderName1)) {
    if (mkdir($folderName1, 0777, true)) {
        echo "Folder created successfully";
    } else {
        echo "Failed";
    }
} else {
    echo "Folder already exists";
}

echo "\n";


// Empty dir
$deleteEmptyDir = 'Test_dir';

if (is_dir($deleteEmptyDir)) {
    if (rmdir($deleteEmptyDir)) {
        echo "Folder successfully deleted";
    } else {
        echo "Failed";
    }
} else {
    echo "Not found";
}

echo "\n";



//Folder with content 
$dFolderName = 'TestAgain'; // Use '=' for assignment, not '=='

if (is_dir($dFolderName)) {
    // Get the list of files in the directory, excluding '.' and '..'
    $dFiles = array_diff(scandir($dFolderName), array('.', '..'));

    foreach ($dFiles as $dFile) {
        $path = "$dFolderName/$dFile"; // Use the correct variable $dFile
        if (file_exists($path)) { // Check if the file exists
            if (unlink($path)) { // Attempt to delete the file
                echo "Deleted: $path\n";
            } else {
                echo "Failed to delete: $path\n";
            }
        } else {
            echo "File not found: $path\n";
        }
    }
} else {
    echo "Directory not found: $dFolderName\n";
}


?>