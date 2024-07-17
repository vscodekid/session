<html>
    <head>
        <title>Factorial of a number</title>
    </head>
    <body>
        <form method="post">
            <label for="number">Enter a number : </label>
            <input type="number" name="n1" id="n1"><br><br>
            <input type="submit" name="btn" value="Find Factorial">
        </form>
    </body>
    <?php
        if(isset($_REQUEST["btn"]))
        {
            $num=$_REQUEST["n1"];
            $f=1;
            for($i=1;$i<=$num;$i++)
            {
                $f*=$i;
            }
            echo "factorial of the $num is $f";
        }
    ?>
</html>