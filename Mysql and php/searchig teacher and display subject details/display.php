<?php
    $conn=mysqli_connect("localhost","root","","teacherdata");
    if(mysqli_connect_errno())
    {
        die("Connection error").mysqli_connect_error();
    }
    if (isset($_REQUEST['btn'])) {
        $tid=$_REQUEST['tid'];
        $select="select t.name,t.department,t.designation,t.mobno,s.sid,s.subject from subject s join teacher t on t.tid=s.tid where t.tid=$tid";
        $res=mysqli_query($conn,$select);
        if($res->num_rows > 0)
        {
            echo "<table border=1 cellspacing='5' cellpadding='8'>";
            echo "<tr>";
            echo "<th>name</th>";
            echo "<th>department</th>";
            echo "<th>Designation</th>";
            echo "<th>Mobile number</th>";
            echo "<th>Subject</th>";
            echo "<th>Subject ID</th>";
            echo "</tr>";
            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>" .$row["name"]."</td>";
                echo "<td>" .$row["department"]."</td>";
                echo "<td>" .$row["designation"]."</td>";
                echo "<td>" .$row["mobno"]."</td>";
                echo "<td>" .$row["subject"]."</td>";
                echo "<td>" .$row["sid"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br><br>";
            echo "<a href='search.php'>Search page </a>";
        }
       
    }
mysqli_close($conn);
?>