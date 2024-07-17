<?php
	$conn=mysqli_connect("localhost","root","","student100");
	if(mysqli_connect_errno())
	{
		die("connection unsuccess").mysqli_connect_errno();
	}
	$selectquery="select * from stddata";
	$res=mysqli_query($conn,$selectquery);
	if($res->num_rows > 0)
	{
		echo "<center>";
		echo "<table border=1 cellspacing='5' cellpadding='5'>";
		echo "<tr>";
		echo "<th>ID </th>";
		echo "<th>NAME </th>";
		echo "<th>COURSE </th>";
		echo "<th> AGE</th>";
		echo "<th>Edit </th>";
		echo "<th>Delete </th>";
		echo "</tr>";
		while($rows=mysqli_fetch_assoc($res))
		{
			echo "<tr>";
			echo "<td>" .$rows["stdid"]. "</td>";
			echo "<td>" .$rows["stdname"]. "</td>";
			echo "<td>" .$rows["stdcourse"]. "</td>";
			echo "<td>" .$rows["stdage"]. "</td>";
			echo "<td><a href='edit.php?id=" .$rows["stdid"]. "'>Edit</a></td>";
			echo "<td> <a href='delete.php?id=" .$rows["stdid"]. "'>Delete </a></td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "</center>";
	}
	else{
		echo "no record found";
	}
	mysqli_close($conn);
?>