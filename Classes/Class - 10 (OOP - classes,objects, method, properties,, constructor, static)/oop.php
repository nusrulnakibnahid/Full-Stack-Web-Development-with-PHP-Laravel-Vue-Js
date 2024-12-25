<?php

// Defining a class
class Car {
    // Defining properties (public, private, protected)
    public $color = "red";
    private $colorPrivate = "red";
    protected $colorProtected = "red";

    //Defining a method
    public function drive() {
        echo "I am driving the $this->color car \n";
    }
}

// Creating/Instantiating an object
$car1 = new Car();
echo $car1->color . "\n";
$car1->drive(); //accessing method

$car2 = new Car();
$car2->color = "Blue";
echo $car2->color . "\n";
$car2->drive(); 



// Constructor
class CarWithConstructor {
    public function __construct() {
        echo "I am a Car constructor \n";
    }
}
$myCar = new CarWithConstructor();

// Passing parameters through constructor
class CarWithParams {
    public $color;

    public function __construct($c) {
        $this->color = $c;
    }

    public function drive() {
        echo "I am driving the $this->color car \n";
    }
}

$car3 = new CarWithParams("Green");
echo $car3->color . "\n";
$car3->drive();

$car4 = new CarWithParams("Pink");
$car4->drive();

// Calculator class example
class Calculator {
    public $num1;
    public $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function TowNumberSum() {
        echo $this->num1 + $this->num2;
    }

    public function TowNumberSubstract() {
        echo $this->num1 - $this->num2;
    }
}
$calculator = new Calculator(5, 9);
$calculator->TowNumberSum();

// Static Properties
class MyClass {
    public static $myStaticProperty = "This is a static property";
}

echo MyClass::$myStaticProperty;

// Static Methods
class MyClassWithStaticMethod {
    public static function myStaticMethod() {
        echo "This is a static method";
    }
}
MyClassWithStaticMethod::myStaticMethod();

// Accessing Static Properties inside a class
class MyClassWithStatic {
    public static $value = "Static Value......";

    public static function myStaticMethod() {
        echo self::$value;
    }
}
MyClassWithStatic::myStaticMethod();

?>