<?php
	$conn=mysqli_connect("localhost","root","","employee");
	if(mysqli_connect_errno())
	{
		die("connection unsucessfull").mysqli_connnect_errno();		
	}
	if(isset($_REQUEST['id']))
	{
		$ID=$_REQUEST['id'];
		$del_query="delete from empdata where emp_id=$ID";
		if(mysqli_query($conn,$del_query))
		{
				echo "row deleted successfully";
		}
		else{
				die("row deleted unsuccessfull").mysqli_error($conn);
		}
		
		
	}
	mysqli_close($conn);
	header("location:display.php");
	exit();

?>

