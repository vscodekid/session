<?php
    if(isset($_REQUEST['btn']))
    {
        $name=$_REQUEST['name'];
        $mark1=$_REQUEST['mark1'];
        $mark2=$_REQUEST['mark2'];
        $mark3=$_REQUEST['mark3'];
        $mark4=$_REQUEST['mark4'];
        $mark5=$_REQUEST['mark5'];
        $mark6=$_REQUEST['mark6'];
        $total=($mark1+$mark2+$mark3+$mark4+$mark5+$mark6);
        $percentage=($total/600)*100;
        echo "<b>".$name." Result</b>";
        echo " <br>Total mark = $total";
        echo "<br>Percentage = " . number_format($percentage, 2) . "%";
        if($percentage <40)
        {
            echo "<br>$name is Failed";
        }
        if($percentage >=40 && $percentage <50)
        {
            echo "<br>$name Grade is D";
        }
        if($percentage >=50 && $percentage <60)
        {
            echo "<br>$name Grade is C";
        }
        if($percentage >=60 && $percentage <70)
        {
            echo "<br>$name Grade is B";
        }
        if($percentage >=70 && $percentage <80)
        {
            echo "<br>$name Grade is A";
        }
        if($percentage >=90 && $percentage <=100)
        {
            echo "<br>$name Grade is A+";
        }
    }


?>