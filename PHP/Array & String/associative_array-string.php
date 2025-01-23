<?php
$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' => '15',
    'class' => 8,
    'section' => 'B'
);

print_r($student);

echo $student['fname'] . " " . $student['lname'] . "\n";

printf("%s %s \n", $student['fname'], $student['lname']);

$serialized = serialize($student);
echo $serialized;
echo "\n \n";

$newStudent = unserialize($serialized);
print_r($newStudent);



//json data show
$jsondata = json_encode($student);
echo $jsondata;



$studennt2 = json_decode($jsondata,true);
print_r($studennt2);
?>
