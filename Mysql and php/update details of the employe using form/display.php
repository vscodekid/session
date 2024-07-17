
<!-- Create a table employee (empno, name, mobile, email) and insert five records. Design a 
php page for updating details of  employee.  -->

<?php
    $conn=mysqli_connect("localhost","root","","employee1001");
    if(mysqli_connect_errno())
    {
        die("Connection unsuccessfull").mysqli_connect_error();
    }
    $select="select * from employeedata";
    $res=mysqli_query($conn,$select);
    if($res->num_rows > 0){
        echo "<table border=1 cellspacing='5' cellpadding='8'>";
        echo "<tr>";
        echo "<th>Employee number</th>";
        echo "<th>Name</th>";
        echo "<th>Mobile number</th>";
        echo "<th>Email</th>";
        echo "<th>Edit</th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
            echo "<td>" .$row["empno"]."</td>";
            echo "<td>" .$row["name"]."</td>";
            echo "<td>" .$row["mobile"]."</td>";
            echo "<td>" .$row["email"]."</td>";
            echo "<td> <a href='update.php?id=".$row["empno"]."'>Edit</a></td>";
            echo "</tr>";
        }
        echo "</table>";


    }
?>