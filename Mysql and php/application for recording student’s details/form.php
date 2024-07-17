<!-- Develop a php application for recording student’s details (admno, name, dob, address, 
fathers name, mob number). Enter the data about at least five students.  -->

<html>
    <head></head>
    <body>
        <h1>Student application form</h1>
        <form action="" method="POST">
            <label for="admno">Admission Number : </label>
            <input type="number" name="admno" placeholder="enter admission number"><br><br>
            <label for="name">Student Name : </label>
            <input type="text" name="name" placeholder="enter your name"><br><br>
            <label for="dob">Date of Birth : </label>
            <input type="date" name="dob" placeholder="enter your dob"><br><br>
            <label for="address">Address : </label>
            <textarea name="address" rows="5" cols="80" placeholder="enter your name"></textarea><br><br>
            <label for="father_name">father name : </label>
            <input type="text" name="father_name" placeholder="enter your father name"><br><br>
            <label for="mob_number"> Mobile Number : </label>
            <input type="number" name="mob_number" placeholder="enter your mobile number"><br><br>
            <input type="submit" value="Submit" name="btn">

        </form>
        
    </body>
    
</html>

<?php
        $conn=mysqli_connect("localhost","root","","studentdb");
        if(mysqli_connect_errno())
        {
            die("connection unsucessfull").mysqli_connect_error();
        }
        if(isset($_REQUEST['btn']))
        {
            $admno=$_REQUEST['admno'];
            $name=$_REQUEST['name'];
            $dob=$_REQUEST['dob']; 
            $address=$_REQUEST['address'];
            $father_name=$_REQUEST['father_name'];
            $mob=$_REQUEST['mob_number'];

            $insert="insert into application (admno,name,dob,address,father_name,mob) values
            ('$admno','$name','$dob','$address','$father_name','$mob')
            ";
            if(mysqli_query($conn,$insert))
            {
                echo "inserted sucessfully";
                header("location:display.php");
        exit();
            }
            else{
                die("insertion unsuccessfull").mysqli_error($conn);

            }
            

        }
        mysqli_close($conn);
        
    ?>