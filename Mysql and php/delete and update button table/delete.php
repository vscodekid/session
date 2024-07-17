<?php
	$conn=mysqli_connect("localhost","root","","student100");
	if(mysqli_connect_errno())
	{
		die("connection unsuccess").mysqli_connect_errno();
	}
	if(isset($_REQUEST['id']))
	{
			$ID=$_REQUEST['id'];
			$delete="delete from stddata where stdid=$ID";
			if(mysqli_query($conn,$delete))
			{
				echo "created sucessfully";
			}
			else
			{
				die("deletion unsuccessfull").mysqli_error($conn);
			}
	}
	mysqli_close($conn);
	header("location:display.php");
	exit();
?>