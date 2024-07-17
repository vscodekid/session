<?php
    $conn=mysqli_connect("localhost","root","","book");
    if(mysqli_connect_errno())
    {
        die("connection unsucessfull").mysqli_connect_error();
    }
    if(isset($_REQUEST['btn']))
    {
        $search=strtolower($_REQUEST['search']);
        $select="select * from details where tittle like '%$search%'";
        $res=mysqli_query($conn,$select);
        if($res->num_rows > 0)
        {
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>BOOK TITLE</th>";
            echo "<th>BOOK ID</th>";
            echo "<th>AUTHOR</th>";
            echo "<th>PRICE</th>";
            echo "<th>PURCHASE DATE</th>";
            echo "</tr>";
            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>".$row["tittle"]."</td>";
                echo "<td>".$row["bookno"]."</td>";
                echo "<td>".$row["author"]."</td>";
                echo "<td>".$row["price"]."</td>";
                echo "<td>".$row["date"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else{
            echo "no records found about the book $search";
        }
    }

    echo "<br><br>";
    echo "<a href='search.php'>Search</a>";
    mysqli_close($conn);

?>