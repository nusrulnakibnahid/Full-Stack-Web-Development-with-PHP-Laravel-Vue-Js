<?php
class Student {
    public $name;
    public $grades;



    public function __construct($name, $grades) {
        $this->name = $name;
        $this->grades = $grades;
    }



    public function averageGrade() {
        return array_sum($this->grades) / count($this->grades);
    }



    public function displayResult() {

        echo "Student Name: {$this->name}\n";

        echo "Average Grade: " . number_format($this->averageGrade(), 2) . "\n";


    }

}



$student = new Student("Alice", [85, 90, 78, 92]);
$student->displayResult();



?>