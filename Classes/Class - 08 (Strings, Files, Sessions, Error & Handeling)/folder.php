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


?>