<?php


$file = "example.txt";
$content = "This is a test content for example file";


if(file_put_contents($file, $content)){

    echo "File successfully created";

}else{
    echo "Failed to create the file";
}

echo"\n";

// By using fopen()
$fileTwo = "Second-file.txt"; 

$handle = fopen($fileTwo, "w"); //w -> write only mode, a -> append mode

if ($handle) {
    fwrite($handle, "Here is your second file");
    fclose($handle);
    echo "Second file created";
} else {
    echo "Failed to create the file";
}
echo"\n";

if(file_exists('example.txt')){

    $content = file_get_contents('example.txt');
    echo $content;
}else{
    echo 'File does not exist';
}
echo"\n";


//File put content









// Delete
$fileDelete = 'example4.txt';

if (file_exists($fileDelete)) {
    if (unlink($fileDelete)) {
        echo "Successfully Deleted";
    } else {
        echo "Failed to delete";
    }
} else {
    echo "File not found";
}


?>