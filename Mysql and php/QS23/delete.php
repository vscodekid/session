<?php
    $conn=mysqli_connect("localhost","root","","employeedb");
    if(mysqli_connect_errno())
    {
        die("connection unsucessfull").mysqli_connect_errno();
    }
    if (isset($_REQUEST['id'])) {
        $ID=$_REQUEST['id'];
        $delete="delete from employees where empid=$ID";
    }
    if (mysqli_query($conn,$delete)) {
        echo "deleted sucessfully";

    }
    else {
        die("delted unsucessfull").mysqli_error($conn);
    }
mysqli_close($conn);
header("location:display.php");
exit();
?>