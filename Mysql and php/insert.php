<?php
	$conn=mysqli_connect("localhost","root","","employee");
	if(mysqli_connect_errno())
	{
			die("connection error").mysqli_connect_errno();
	}
	$insertquery="insert into empdata (emp_name,emp_pos,emp_salary) values
	('Arjun','ceo',150000),
	('pappu','manager',30000),
	('jagan','worker',15000),
	('arun','worker',15000)
	
	";
	if(mysqli_query($conn,$insertquery))
	{
			echo "sucess";
		
	}
	else{
			die("insertion unsucessfull").mysqli_error($conn);
	}
	mysqli_close($conn);
?>