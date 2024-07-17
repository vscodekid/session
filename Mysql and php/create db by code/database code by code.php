<?php

//connection

$conn=mysqli_connect("localhost","root","");
if(mysqli_connect_errno())
{
    die("error connection unsucessfull").mysqli_connect_errno();
}

//create db

$db_name="student10";
$db_create="CREATE DATABASE $db_name";

if(mysqli_query($conn,$db_create)) {
   echo "New Database created sucessfully";
}
else {
    die("New Database creation unsucessfull").mysqli_error($conn);
}

//select the newly created db

mysqli_select_db($conn,$db_name);

//create a new table

$table_name="data";
$create_table=" CREATE TABLE $table_name
(
    std_id INT(10) PRIMARY KEY,
    std_name VARCHAR(10) NOT NULL,
    std_age VARCHAR(20) NOT NULL,
    std_course INT(10) NOT NULL
)";

if(mysqli_query($conn,$create_table)) {
    echo "<br>";
    echo "New $table_name table created sucessfully";
}
else {
    die("New $table_name table creation  unsucessfull").mysqli_error($conn);
}

//insert into table

$insert_value= "INSERT INTO  $table_name (std_id, std_name, std_age, std_course) VALUES
    (101,'ARJUN',21,'BCA'),
    (102,'Gopal', 21,'BCA'),
    (103,'Daniel', 21,'BCA'),
    (104,'Acharry', 21,'BCA'),
    (105,'Pappu', 22,'BCA'),
    (106,'Anu Tiji', 22,'BCA')
    ";
if (mysqli_query($conn,$insert_value)) {
    echo "<br>";
    echo "table values inserted sucessfully";
}
else {
    die("values insertion failed").mysqli_error($conn);
}

//close the connection

mysqli_close($conn);
?>