<!-- Design a webpage for getting Regno, Name, Address, Age and Password. Write a php 
program to validate the following 
a. Age between 18 and 40  
b. Length of password > 8 and it contains special characters and numbers  -->


<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="validate.php" method="post">
            <label for="regno">Register Number : </label>
            <input type="number" name="regno" placeholder="enter your register number"><br><br>
            <label for="name">Name : </label>
            <input type="text" name="name" placeholder="enter your name"><br><br>
            <label for="address">Address : </label>
            <textarea name="address" rows="5" cols="34"></textarea><br><br>
            <label for="Age">Age : </label>
            <input type="number" name="age" placeholder="enter your age"><br><br>
            <label for="password">Password : </label>
            <input type="password" name="password" placeholder="enter your password"><br><br>
            <input type="submit" name="btn" value="Submit">
        </form>
    </body>
</html>