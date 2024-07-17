<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <form method="POST" action="">
        <label for="name">Student Name:</label>
        <input type="text" name="name" placeholder="Enter your name" required><br><br>
        
        <label for="course">Student Course:</label>
        <input type="text" name="course" placeholder="Enter your course" required><br><br>
        
        <label for="age">Student Age:</label>
        <input type="number" name="age" placeholder="Enter your age" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>    

    <?php
		if(isset($_POST['submit']))
		{
				$conn=mysqli_connect("localhost","root","","student100");
				if(mysqli_connect_errno())
				{
						die("connect unsucess").mysqli_connect_errno();
				}
				else
				{
						$n=$_POST['name'];
						$c=$_POST['course'];
						$a=$_POST['age'];
						$insert="insert into stddata (stdname,stdcourse,stdage) values ('$n','$c',$a)";
						if(mysqli_query($conn,$insert))
						{
							echo "inserted sucess";
							header("location:display.php");
							exit();
						}
						else
						{
							die("connect unsucess");
						}
				}
				mysqli_close($conn);
		}
		
	
	?>
</body>
</html>
