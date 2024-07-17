<html>
<head>  
    <title>sort numbers in a range</title>
</head>

<body>
<form method="post" action="sortstartandend.php">
     <label for="start">enter the starting range :</label>
     <input type="number" name="N1" placeholder="enter the starting range"><br><br>
     <label for="End">enter the ending range : </label>
     <input type="number" name="N2" placeholder="enter the ending range"><br><br>
     <label for="range">enter the numbers seperated by commas: </label>
     <input type="text" name="range" placeholder="eg (2,3,4)"><br><br>
     <input type="submit" name="btn" value="click here">
</form> 

<?php
if(isset($_REQUEST["btn"]))
{
    $start=$_REQUEST["N1"];
    $end=$_REQUEST["N2"];
    $numbersInRange=$_REQUEST["range"];
    $number=explode(',',$numbersInRange);

    $inRange=[];

    foreach($number as $num)
    {
        $num=intval($num);
        if ($num >= $start && $num<= $end) 
        {
            $inRange[] = $num;
        }
    }

    echo "valid number are :<br>";
    foreach($inRange as $num)
    {
        echo $num ."<br>";
    }
    echo "<br><br>";
    echo "after sorting the valid numbers would be like :<br>";
    sort($inRange);
    foreach($inRange as $num)
    {
        echo $num ."<br>";
    }
}
?>
</body>

</html>