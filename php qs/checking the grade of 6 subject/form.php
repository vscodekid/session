<!-- Write php code getting marks of six subjects (out of 100 marks) of a student and display 
the grade 
Less than 40 %      Failed       
<50%                Grade D
<60%                Grade C
<70%                Grade B 
<80%                Grade B+
<90%                Grade A 
Above 90%           Grade A+ -->

<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="grade.php" method="post">
            <label for="name">Student Name : </label>
            <input type="text" name="name" placeholder="enter your name"><br><br>
            <label for="mark1">Mark 1 : </label>
            <input type="number" name="mark1" max="100"  required><br><br>
            <label for="mark2">Mark 2 : </label>
            <input type="number" name="mark2" max="100"  required><br><br>
            <label for="mark3">Mark 3 : </label>
            <input type="number" name="mark3" max="100"  required><br><br>
            <label for="mark4">Mark 4 : </label>
            <input type="number" name="mark4" max="100"  required><br><br>
            <label for="mark5">Mark 5 : </label>
            <input type="number" name="mark5" max="100"  required><br><br>
            <label for="mark6">Mark 6 : </label>
            <input type="number" name="mark6" max="100"  required><br><br>
            <input type="submit" value="Submit" name="btn">
        </form>
    </body>
</html>