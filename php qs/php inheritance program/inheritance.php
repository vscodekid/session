<?php

    class employee{
        var $name;
        var $age;
        function __construct($n,$a)
        {
            $this->name=$n;
            $this->age=$a;
        }
        function displayinfo()
        {
            echo "Name =" .$this->name."<br>";
            echo "Age =" .$this->age."<br>";
        }
    }

    class empdata extends employee
    {
        var $depname;
        var $id;
        function __construct($n, $a,$id,$depname)
        {
            parent::__construct($n,$a);
            $this->depname=$depname;
            $this->id=$id;
        }
        function display()
        {
            parent::displayinfo();
            echo "Department id =" .$this->id."<br>";
            echo "Department name =" .$this->depname."<br>";
        }
    }

    $obj = new empdata("Arjun",21,1001,"developer");
    $obj->display();

?>