<!-- Design a web page for applying a vehicle loan with fields Application number, Name, 
Address, Mobile number, Loan duration and Loan amount. Write a php code to save the 
application to a database.     -->


<html>
    <head>
        <title>form</title>
    </head>
    <body>
        <form action="" method="post">
            <lebel for="app_no">Application number : </lebel>
            <input type="number" name="applno" placeholder="enter your application number"><br><br>
            <label for="name">Name : </label>
            <input type="text" name="name" placeholder="enter your name"><br><br>
            <label for="Address">Address : </label>
            <textarea name="address" rows="5" cols="34"></textarea><br><br>
            <label for="name">Mobile number : </label>
            <input type="text" name="mob" placeholder="enter your phone number" max="10"><br><br>
            <label for="loanduration">Loan Duration : </label>
            <input type="number" name="loanduration" placeholder="enter the loan duration"><br><br>
            <label for="loanamount">Loan Amount : </label>
            <input type="number" name="loandamount" placeholder="enter the loan amount"><br><br>
            <input type="submit" value="submit" name="btn">

        </form>
    </body>
</html>

<?php
    $conn=mysqli_connect("localhost","root","","vehicle");
    if(mysqli_connect_errno())
    {
        die("connection unsuccessfull").mysqli_connect_error();
    }
    if(isset($_REQUEST['btn']))
    {
        $appno=$_REQUEST['applno'];
        $name=$_REQUEST['name'];
        $address=$_REQUEST['address'];
        $mob=$_REQUEST['mob'];
        $loanduration=$_REQUEST['loanduration'];
        $loandamount=$_REQUEST['loandamount'];

        $insert="insert into loan values ('$appno','$name','$address','$mob','$loanduration','$loandamount')";

        if(mysqli_query($conn,$insert))
        {
            echo "inserted sucessfully";
        }
        mysqli_close($conn);
    }
?>
