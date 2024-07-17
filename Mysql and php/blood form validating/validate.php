<?php

    if(isset($_REQUEST['btn']))
    {
        $name=$_REQUEST['Name'];
        $address=$_REQUEST['Address'];
        $dob=$_REQUEST['Dob'];
        $gender=$_REQUEST['gender'];
        $mob=$_REQUEST['mob'];
        $bloodgroup=$_REQUEST['bloodgroup'];
        $errors=[];

        if(empty($name))
        {
            $errors[]="Name is required";
        }
        if(empty($address))
        {
            $errors[]="address is required";
        }
        if(empty($dob))
        {
            $errors[]="dob is required";
        }
        if(empty($gender))
        {
            $errors[]="gender is required";
        }
        if(empty($mob))
        {
            $errors[]="gender is required";
        }
        if(strlen($mob)!=10)
        {
            $errors[]="Mobile number should be of 10 numbers";
        }
        if(empty($bloodgroup))
        {
            $errors[]="blood group is required";
        }
        if(!empty($errors))
        {
            foreach($errors as $error)
            {
                echo "<p>$error</p>";
            }
        }
        else{
            echo "<h2>form validation sucessfull inserted correctly</h2>";
        }
    }

?>