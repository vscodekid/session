<?php
$conn=mysqli_connect("localhost","root","","teacherdata");

$create ="create table subject (
    sid INT AUTO_INCREMENT PRIMARY KEY,
    tid INT,
    subject VARCHAR(25) NOT NULL,
    FOREIGN KEY(tid) REFERENCES teacher(tid)
)"; 
if(mysqli_query($conn,$create))
{
    echo "sucess";
}
?>