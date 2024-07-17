<?php
	$conn=mysqli_connect("localhost","root","","student100");
	if(mysqli_connect_errno())
	{
		die("connection unsuccess").mysqli_connect_errno();
	}
	if(isset($_REQUEST['id']))
	{
		$ID=$_REQUEST['id'];
		$select="select * from stddata where stdid=$ID";
		$res=mysqli_query($conn,$select);
		
		while($rows=mysqli_fetch_assoc($res))
		{
			echo "<form method='POST'>";
			echo "student id: <input type='number' name='t1' value='".$rows['stdid']."' readonly><br>";
			echo "student name: <input type='text' name='t2' value='".$rows['stdname']."' ><br>";
			echo "student course: <input type='text' name='t3' value='".$rows['stdcourse']."' ><br>";
			echo "student age: <input type='number' name='t4' value='".$rows['stdage']."' ><br>";
			echo "<input type='submit' name='s1' value='update'>";
			echo "</form>";
		}
	}
	else
	{
		echo "no record found on $ID";
	}

	if(isset($_REQUEST['s1']))
	{
		$conn=mysqli_connect("localhost","root","","student100");
	if(mysqli_connect_errno())
	{
		die("connection unsuccess").mysqli_connect_errno();
	}
	$t1=$_REQUEST['t1'];
	$t2=$_REQUEST['t2'];
	$t3=$_REQUEST['t3'];
	$t4=$_REQUEST['t4'];
	$update="update stddata set stdname='$t1' ,stdcourse='$t2',stdage='$t3' where stdid='$t1'";
	if(mysqli_query($conn,$update))
	{
		echo "updated successfully";
		header("location:display.php");
exit();
	}
	else{
		die("unsucess");
	}
	
	}
mysqli_close($conn);

?>