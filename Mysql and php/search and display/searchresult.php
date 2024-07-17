<?php
$conn=mysqli_connect("localhost","root","","product");
if (mysqli_connect_errno()) {
    die("Connection Unsucessfull").mysqli_connect_error();
}
if(isset($_REQUEST['submit']))
    {
        $productsearch=strtolower($_REQUEST['saerch']);
        $searchquery="select * from productdata where product_name like '%$productsearch%'";
        $res=mysqli_query($conn,$searchquery);
        if($res->num_rows > 0)
        {
        echo "<table border='1' cellspacing='5' cellpadding='5'>";
        echo "<tr>";
        echo "<th>Product Name</th>";
        echo "<th>Description</th>";
        echo "<th>Unit Cost</th>";
        echo "<th>Tax Rate</th>";
        echo "<th>Expiry Date</th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($res))
        {
            echo "<tr>";
            echo "<td>".$row["product_name"]."</td>";
            echo "<td>".$row["description"]."</td>";
            echo "<td>".$row["UnitCost"]."</td>";
            echo "<td>".$row["Taxrate"]."</td>";
            echo "<td>".$row["expiry_date"]."</td>";
            echo "</tr>";
        }
        echo "</table>";

        }
    }
    else{
        echo "no records found";
    }
    echo "<br><br>";
    echo "<a href='searchandisplayproducts.php'>Display page </a>";
mysqli_close($conn);
    ?>