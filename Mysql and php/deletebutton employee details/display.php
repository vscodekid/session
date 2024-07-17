<?php
	$conn=mysqli_connect("localhost","root","","employee");
	if(mysqli_connect_errno())
	{
		die("connection unsucessfull").mysqli_connnect_errno();		
	}
	$select="select * from empdata";
	$res=mysqli_query($conn,$select);
	if($res->num_rows >0)
	{
			echo "<table border='1',cellspacing='5',cellpadding='5' ";
			echo "<tr>";
			echo "<th>Employee ID</th>";
			echo "<th>Employee Name</th>";
			echo "<th>Employee Position</th>";
			echo "<th>Employee Salary</th>";
			echo "<th>Delete button</th>";
			echo "</tr>";
			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>" .$row["emp_id"]. "</td>";
				echo "<td>" .$row["emp_name"]. "</td>";
				echo "<td>" .$row["emp_pos"]. "</td>";
				echo "<td>" .$row["emp_salary"]. "</td>";
				echo "<td> <a href='delete.php?id=" .$row["emp_id"]. "'>Delete </a></td>";
				echo "</tr>";
			}
			echo "</table>";
		
	}
	else{
			echo "no record found";
		
	}
	mysqli_close($conn);
?>