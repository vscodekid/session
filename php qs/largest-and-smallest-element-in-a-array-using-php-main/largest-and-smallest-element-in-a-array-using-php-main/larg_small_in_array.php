<html>
    <head>
        <title>find the largest and smallest in the array..</title>
    </head>
    <body>
        <form method="post">
            <label for="number">Enter the numbers seperates by commas..</label>
            <input type="text" name="n1" placeholder="(eg : 2,3,4,5)"><br><br>
            <input type="submit" name="btn" value="Find the smallest and largest">
        </form>
    </body>
    <?php
        if(isset($_REQUEST["btn"])){
            $a=$_REQUEST["n1"];
            $num=explode(",",$a);
            $n=count($num);
            $larg=$num[0];
            $small=$num[0];
            for($i=0;$i<=$n;$i++)
            {
                if($larg < $num[$i]){
                    $larg=$num[$i];
                }
                if($small > $num[$i]){
                    $small=$num[$i];
                }
            }
        echo " The smallest element in the array is $small...";
        echo "<br> The largest element in the array is $larg....";
        }
    ?>
</html>