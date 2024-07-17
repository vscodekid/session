<!-- Using PHP and MySQL, develop a program to delete   the employee details in a table and display employee details in a table format. -->

<?php
			$conn=mysqli_connect("localhost","root","","storedata");
			if(mysqli_connect_errno())
			{
					die("connection unsucessfull").mysqli_connect_errno();
			}
//create table product1
			$create_product="CREATE TABLE product1  (
			Productid INT  PRIMARY KEY AUTO_INCREMENT,
			productname VARCHAR(30) NOT NULL,
			catid INT,
			Description TEXT NOT NULL,
			 quantity INT,
			UnitCost DECIMAL(10, 2),
			TotalCost DECIMAL(10, 2),
			purchasedate DATE,
			FOREIGN KEY (catid)  REFERENCES catergory(catid)
			)";	
			if(mysqli_query($conn,$create_product))
			{
					echo "created sucessfully";
			}
			else{
				die("table created unsuccesssfull").mysqli_error($conn);
			}

//insert values into category

			$insert_category="insert into catergory (catname) values
			('electronics'),
			('clothing'),
			('books')
			";
			if(mysqli_query($conn,$insert_category))
			{
					echo "inserted sucessfully";
			}
			else{
				die("inserted unsuccesssfull").mysqli_error($conn);
			}

//insert values into product

			$insert_product="insert into product1 (productname,catid,Description,quantity,UnitCost,TotalCost,purchasedate) values
			('Laptop',1,'A high perfornmance gaming laptop',12,1200.00,89000.00,'2024-06-03'),
			('T-shirt',2,'A high quality T-Shirt',22,120.00,890.00,'2024-07-10'),
			('Python volume3',3,'A basic knwoledge book',32,80.00,220.00,'2024-04-03')
			";
			if(mysqli_query($conn,$insert_product))
			{
					echo "insertion sucessfull";
			}

//update product quantity

			$update_quantity="update product1 set quantity=30 where Productid=1";
			if(mysqli_query($conn,$update_quantity))
			{
					echo "updated sucessfully";
			}
			else{
				die("updation unsuccesssfull").mysqli_error($conn);
			}

//produce reports (category wise)
echo "<h1> Reports category wise </h1>";
echo "<br><br>";
			$produce_reports="select c.catname, SUM(p.quantity) AS total_quantity, SUM(p.TotalCost) AS total_cost  from product1 p join catergory c  ON c.catid=p.catid GROUP BY c.catname";
			$resrep=mysqli_query($conn,$produce_reports);
			if($resrep->num_rows >0)
			{
					echo "<table border=1 cellspacing='5' cellpadding='5'>";
					echo "<tr>";
					echo "<th>Category Name</th>";
					echo "<th>Total Quantity</th>";
					echo "<th>Total Cost</th>";
					echo "</tr>";
					while($row=mysqli_fetch_assoc($resrep))
					{
							echo "<tr>";
							echo "<td>" .$row["catname"]. "</td>";
							echo "<td>" .$row["total_quantity"]. "</td>";
							echo "<td>" .$row["total_cost"]. "</td>";
							echo "</tr>";
					}	
					echo "</table>";
			}
			else
			{
				echo "no records found";	
			}
echo "<br><br><br>";
echo "<h1> Reports product wise </h1>";
echo "<br><br>";	
//produce reports (product wise wise)
			$record_products="select p.productname, p.quantity, p.UnitCost, p.TotalCost from product1 p";
			$resprod=mysqli_query($conn,$record_products);
			if($resprod->num_rows > 0)
			{
					echo "<table border=1 cellspacing='5' cellpadding='5'>";
					echo "<tr>";
					echo "<th>Product Name</th>";
					echo "<th>Product Quantity</th>";
					echo "<th>Unit Cost</th>";
					echo "<th>Total Cost</th>";
					echo "</tr>";	
					while($rowp=mysqli_fetch_assoc($resprod))
					{
							echo "<tr>";
							echo "<td>" .$rowp["productname"]. "</td>";
							echo "<td>" .$rowp["quantity"]. "</td>";
							echo "<td>" .$rowp["UnitCost"]. "</td>";
							echo "<td>" .$rowp["TotalCost"]. "</td>";
							echo "</tr>";	
					}	
					echo "</table>";
					
			}
//curd operation
echo "<br><br>";
echo "<h1>curd operation </h1>";
//insert operation
			$insert2="INSERT INTO Product1 (Productid, productname, catid, description, quantity, UnitCost, purchasedate) 
				VALUES (5, 'Headphones', 1, 'Noise-cancelling headphones', 15, 50.00, '2023-01-04')";
				if(mysqli_query($conn,$insert2))
				{
						echo "inserted sucessfully";
				}
				else{
						die("insertion unsuccessfull").mysqli_error($conn);
				}

//delete operation
		$delete="delete from product1 where Productid=4";
			if(mysqli_query($conn,$delete))
			{
					echo "Row deleted sucessfully";
			}
			else{
					die("deletion unsuccessfull").mysqli_error($conn);	
			}
	
//updation
			$update2="update  product1 set TotalCost=700  where Productid=2";
			if(mysqli_query($conn,$update2))
			{
					echo "row updated sucessfully";
			}
			else{
			die("updation unsucessfull").mysqli_error($conn);
			}

//search
echo "<br><br>";
echo "<h3>search and display </h3>";
		$search="SELECT * FROM Product1 WHERE productname LIKE '%Laptop%' ";
		$result=mysqli_query($conn,$search);
		if($result->num_rows > 0)
			{
					echo "<table border=1 cellspacing='5' cellpadding='5'>";
					echo "<tr>";
					echo "<th>Product id</th>";
					echo "<th>product name</th>";
					echo "<th>quantity</th>";
					echo "<th>TotalCost</th>";
				//	echo "<th>purchasedate</th>";
					echo "</tr>";	
					while($rowsearch=mysqli_fetch_assoc($result))
					{
							echo "<tr>";
							echo "<td>" .$rowsearch["Productid"]. "</td>";
							echo "<td>" .$rowsearch["productname"]. "</td>";
							echo "<td>" .$rowsearch["quantity"]. "</td>";
							echo "<td>" .$rowsearch["TotalCost"]. "</td>";
							echo "</tr>";
					}	
					echo "</table>";
					
			}
mysqli_close($conn);
?>