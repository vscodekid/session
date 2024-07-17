<?php
    if(isset($_REQUEST['btn']))
    {
        $regno=$_REQUEST['regno'];
        $name=$_REQUEST['name'];
        $address=$_REQUEST['address'];
        $age=$_REQUEST['age'];
        $password=$_REQUEST['password'];
        $errors=[];
        if($age < 18 && $age >40 ){
            $errors[]="age must be grater than 18 and less than or equal to  40";
        }
        if(strlen($password) < 8)
        {
            $errors[]="Password length must be 8";
        }
        if(!preg_match('/[0-9]/',$password))
        {
            $errors[]="Password must contain atleast one number";
        }
        if(!preg_match('/[#@$%~!*.,:;?|]/',$password))
        {
            $errors[]="Password must contain a special character";
        }

        if(!empty($errors))
        {
            foreach($errors as $error)
            {
                echo $error. "<br>";
            }
        }
        else{
            echo "All inputs are valid";
        }
    }
?>