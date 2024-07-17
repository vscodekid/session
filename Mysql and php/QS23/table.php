<?php
    $conn=mysqli_connect("localhost","root","","employeedb");
    $table="create table employees (
    empid INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(25) NOT NULL,
    sex VARCHAR(10) NOT NULL,
    dep_id INT,
    grade VARCHAR(25) NOT NULL,
    salary DECIMAL(10,2) NOT NULL,
    designation VARCHAR(25) NOT NULL,
    doj DATE,
    FOREIGN KEY(dep_id) REFERENCES department(dep_id)
    )";
    if(mysqli_query($conn,$table))
    {
        echo "sucess";
    }
    mysqli_close($conn);
?>