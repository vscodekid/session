<?php

class Person {
    var $name;
    var $age;
    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "Constructor called for $this->name<br>";
    }

    function __destruct() {
        echo "Destructor called for $this->name<br>";
    }

    function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

$person1 = new Person("John Doe", 30);
$person1->displayInfo();
$person2 = new Person("Jane Smith", 25);
$person2->displayInfo();

?>

