<html>
<head>
    <style>
        body{
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            height: 100vh;
            padding: 0;
            background-color: #f2f2f2;
            justify-content: center;
            font-weight: bold;
        }
        form{
            width: 1400px;
            padding: 20px;
            background-color: #fff;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
             padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 30px;
            font-weight: bold;
            color: green;
        }
        input[type="submit"] {
            background-color:green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php

    $conn=mysqli_connect("localhost","root","","employeedb");
    if(mysqli_connect_errno())
    {
        die("connection unsucessfull").mysqli_connect_errno();
    }
    if (isset($_REQUEST['id'])) {
       $ID=$_REQUEST['id'];
       $select="select * from employees where empid=$ID";
       $res=mysqli_query($conn,$select);
       while ($row=mysqli_fetch_array($res)) {
      
        echo "<form method='POST'>";
            echo "EMPLOYEE ID : <input type='number' name='u1' value='".$row['empid']."' readonly>";
            echo "NAME : <input type='text' name='u2' value='".$row['name']."'>";
            echo "SEX : <input type='text' name='u3' value='".$row['sex']."'>";
            echo "DEPARTMENT ID : <input type='number' name='u4' value='".$row['dep_id']."' readonly>";
            echo "GRADE: <input type='text' name='u5' value='".$row['grade']."'>";
            echo "SALARY: <input type='number' name='u6' value='".$row['salary']."'>";
            echo "DESIGNATION: <input type='text' name='u7' value='".$row['designation']."'>";
            echo "DATE: <input type='date' name='u8' value='".$row['doj']."'>";
            echo "<input type='submit' name='update' value='update'>";
            
       }
    }

    if(isset($_REQUEST['update']))
    {
        $empid=$_REQUEST['u1'];
        $n=$_REQUEST['u2'];
        $s=$_REQUEST['u3'];
        $g=$_REQUEST['u5'];
        $sal=$_REQUEST['u6'];
        $d=$_REQUEST['u7'];
        $date=$_REQUEST['u8'];
        $update="update employees set name='$n',sex='$s',grade='$g',salary='$sal',designation='$d',doj='$date' where empid='$empid'";
        if(mysqli_query($conn,$update))
        {
            echo "updated sucessfully";
            header("location:display.php");
            exit();
        }
        else {
            die("updation unsucessfull").mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>

</body>
</html>


