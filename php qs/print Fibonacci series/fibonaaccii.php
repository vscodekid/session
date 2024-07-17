<!DOCTYPE html>
<html>
<head>
<title>Fibonacci series</title>
</head>
<body>
<h1>Fibonacci series</h1>
<br>
<form method="POST" action="fibonaccii.php">
<label for="Number">Enter the limit of the Fibonacci series:</label>
<input type="number" name="Number" id="n1" placeholder="Enter a limit">
<br>
<br>
<input type="submit" value="Generate" name="btn">
</form>

<?php
if(isset($_REQUEST["btn"]))
{
    $limit = $_REQUEST["Number"];
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;
    echo "Fibonacci Series: " . $fib[0] . ", " . $fib[1];
    for ($i = 2; $i < $limit; $i++){
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        echo ", " . $fib[$i];
    }
}
?>
</body>
</html>
