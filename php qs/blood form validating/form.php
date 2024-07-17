<!-- Create an application form using html  that contain  Name, Address, Dob, Gender, Mobile 
No, Blood Group . Write PHP code for validating the following  
a. All entries are non empty 
b. Mobile number must be digits and its length is 10 -->

<html>
    <head>
        <title>Form</title>

    </head>
    <body>
        <form action="validate.php" method="post">
            <label for="Name">Name : </label>
            <input type="text" name="Name" placeholder="enter your name"><br><br>
            <label for="Address">Address : </label>
            <textarea name="Address" rows="5" cols="34"></textarea><br><br>
            <label for="Dob">Dob : </label>
            <input type="date" name="Dob"><br><br>
            <label for="gender">Gender : </label>
            <select name="gender">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">others</option>
            </select><br><br>
            <label for="mob">Mobile number : </label>
            <input type="number" name="mob" placeholder="enter your mobile number"><br><br>
            <label for="bloodgroup">Blood Group : </label>
            <select name="bloodgroup">
                <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select><br><br>
            <input type="submit" name="btn" value="Submit">
        </form>
    </body>
</html>