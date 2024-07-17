<!-- Create a Product table (Product_id, product name, description, Unit Cost, Tax rate, expiry 
date) and insert five records. Write php code to view the details of all the products. Give an 
option to search for a product name in the list -->

<?php

    $conn=mysqli_connect("localhost","root","","product");
    if (mysqli_connect_errno()) {
        die("Connection Unsucessfull").mysqli_connect_error();
    }
    $selectall="select * from productdata";
    $result=mysqli_query($conn,$selectall);
    if($result->num_rows > 0)
    {
        echo "<table border='1' cellspacing='5' cellpadding='5'>";
        echo "<tr>";
        echo "<th>Product Name</th>";
        echo "<th>Description</th>";
        echo "<th>Unit Cost</th>";
        echo "<th>Tax Rate</th>";
        echo "<th>Expiry Date</th>";
        echo "</tr>";
        while($rows=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$rows["product_name"]."</td>";
            echo "<td>".$rows["description"]."</td>";
            echo "<td>".$rows["UnitCost"]."</td>";
            echo "<td>".$rows["Taxrate"]."</td>";
            echo "<td>".$rows["expiry_date"]."</td>";
            echo "</tr>";
        }
        echo "</table>";

    }
    else{
        echo "no records found";
    }
//search options providing
echo "<br><br><br>";
    echo "<form action='searchresult.php' method='POST'>";
    echo "Search Product: <input type ='text' name='saerch' placeholder='enter product name'>";echo "<br><br>";
    echo "<input type='submit' name='submit' value='search'>";
    echo "</form>";



    mysqli_close($conn);



?>