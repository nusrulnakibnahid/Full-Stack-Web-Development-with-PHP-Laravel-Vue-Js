<?php
class person{
    public $name;
    public $age;
}

$person1 = new person();
$person1 -> name = "Nahid";
$person1 -> age = 22;

echo $person1 -> name .  "\n";
echo $person1 -> age;
?>