<?php

$conn=mysqli_connect("localhost","root","","studentdb");
        if(mysqli_connect_errno())
        {
            die("connection unsucessfull").mysqli_connect_error();
        }
        $select="select * from application";
        $res=mysqli_query($conn,$select);
        if($res->num_rows > 0)
        {
            echo "<table border=1 cellspacing=5 cellpadding=5>";
            echo "<tr>";
            echo "<th>Name</th>";
            echo "<th>Admission number</th>";
            echo "<th>DOB</th>";
            echo "<th>Address</th>";
            echo "<th>Father name</th>";
            echo "<th>MOB</th>";
            echo "</tr>";
            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>" .$row["name"]. "</td>";
                echo "<td>" .$row["admno"]. "</td>";
                echo "<td>" .$row["dob"]. "</td>";
                echo "<td>" .$row["address"]. "</td>";
                echo "<td>" .$row["father_name"]. "</td>";
                echo "<td>" .$row["mob"]. "</td>";

                echo "</tr>";
            }
            echo "</table>";

        }
        else{
            echo "no records found";
        }
        echo "<br><br><br>";
        echo "<a href='form.php'>Form</a>";
        mysqli_close($conn);
?>