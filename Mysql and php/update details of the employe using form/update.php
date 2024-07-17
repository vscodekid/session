<?php
    $conn=mysqli_connect("localhost","root","","employee1001");
    if(mysqli_connect_errno())
    {
        die("Connection unsuccessfull").mysqli_connect_error();
    }
    if(isset($_REQUEST['id']))
    {
        $id=$_REQUEST['id'];
        $select="select * from employeedata where empno=$id";
        $res=mysqli_query($conn,$select);
        while($row=mysqli_fetch_array($res))
        {
            echo "<form method='post' action=''>";
            echo "Employee id : <input type='text' name='t1' value='".$row['empno']."' readonly><br><br>";
            echo "Employee Name : <input type='text' name='t2' value='".$row['name']."'><br><br>";
            echo "Mobile number : <input type='text' name='t3' value='".$row['mobile']."'><br><br>";
            echo "Emaill : <input type='text' name='t4' value='".$row['email']."'><br><br>";
            echo "<input type='submit' value='update' name='btn1'>";
            echo "</form>";
        }
    }

    if(isset($_REQUEST['btn1']))
    {
        $empno1=$_REQUEST['t1'];
        $name1=$_REQUEST['t2'];
        $mob1=$_REQUEST['t3'];
        $email1=$_REQUEST['t4'];

        $update1="update employeedata set name='$name1',mobile='$mob1',email='$email1' where empno=$empno1";
        if(mysqli_query($conn,$update1))
        {
            echo "inserted successfully..";
            header("location:display.php");
            exit();
        }
        else{
            echo "updation unsuccessfull..";
        }

    }
    mysqli_close($conn);
?>