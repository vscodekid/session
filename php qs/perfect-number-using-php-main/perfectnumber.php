<html>
    <head>
        <title>Perfect number or not ...</title>
    </head>
    <body>
    <form method="post">
        <label for="Number">Enter a number ....</lbael>
        <input type="number" id="n1" name="n1"><br><br>
        <input type="submit" name="btn" id="btn" value="clcik"><br><br>
    </form>

    <?php
        if(isset($_REQUEST["btn"]))
        {
            $num=$_REQUEST["n1"];
            $i=1;
            $total=0;

            for($i=1;$i<$num;$i++)
            {
                if($num % $i ==0){
                    $total+=$i;
                }
            }
            if($total==$num)
            {
                echo "$num is a perfect number..";
            }
            else{
                echo "$num is not a perfect number..";
            }

        }

    ?>
        

    </body>
    
</html>