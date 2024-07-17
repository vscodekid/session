<?php
//connecting the db

    $conn=mysqli_connect("localhost","root","","employeedb");
    if(mysqli_connect_errno())
    {
        die("connection unsucessfull").mysqli_connect_errno();
    }
    
    // Validating the form
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $depid = $_POST['depid'];
        $grade = $_POST['grade'];
        $salary = $_POST['salary'];
        $designation = $_POST['designation'];
        $date = $_POST['date'];

        // Storing all the errors in an array
        $errors = [];

        if(empty($name)) {
            $errors[] = "Name is required";
        }
        if(empty($sex)) {
            $errors[] = "Sex is required";
        } elseif (!in_array(strtolower($sex), ['male', 'female'])) {
            $errors[] = "Please enter a valid format (male/female)";
        }
        if(empty($grade)) {
            $errors[] = "Grade is required";
        } elseif (!in_array(strtolower($grade), ['junior', 'senior', 'mid', 'lead'])) {
            $errors[] = "Please enter a valid format (junior/senior/mid/lead)";
        }
        if(empty($salary)) {
            $errors[] = "Salary is required";
        } elseif (!is_numeric($salary) || $salary <= 0) {
            $errors[] = "Salary should be a number greater than zero";
        }
        if(empty($designation)) {
            $errors[] = "Designation is required";
        }
        if(empty($date)) {
            $errors[] = "Date is required";
        }

        // Display errors above the form
        if(!empty($errors)) {
            echo '<div class="error">' . implode('<br>', $errors) . '</div>';
        }
        else {
            $insert="insert into employees (name,sex,dep_id,grade,salary,designation,doj) values
            ('$name','$sex','$depid','$grade',$salary,'$designation','$date')
            ";
            if(mysqli_query($conn,$insert))
            {
                echo "inserted sucessfully";
            }
            else
            {
                die("insertion unsucessfull").mysqli_error($conn);
            }
        }
    }
mysqli_close($conn);
header("location:display.php");
exit();
?>
