<!-- Design tables to store information about employees such as empid, name, sex, dept ID, grade, salary, designation, DOJ. Department table contains: deptName, deptID. Write a web program based on PHP, MySQL, CSS etc. to perform the following. a) Traverse records, b) add records c) delete. Check all validations. Display the record of an employee as per our choice. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #fff;
            padding: 70px;
            width: 1300px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 30px;
        }
        input[type="submit"] {
            background-color:red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
        }
       
    </style>
</head>
<body>
   
    <form action="validateandinsert.php" method="POST">
        <label for="name">NAME:</label>
        <input type="text" name="name" class="name" placeholder="Enter your name">
        
        <label for="sex">SEX:</label>
        <input type="text" name="sex" class="sex" placeholder="Enter your sex (male/female)">
        
        <label for="depid">DEPARTMENT ID:</label>
        <input type="number" name="depid" class="depid" placeholder="Enter your department ID" required>
        
        <label for="grade">GRADE:</label>
        <input type="text" name="grade" class="grade" placeholder="Enter your grade (Junior, Mid, Senior, Lead)">
        
        <label for="salary">SALARY:</label>
        <input type="number" name="salary" class="salary" placeholder="Enter your salary">
        
        <label for="designation">DESIGNATION:</label>
        <input type="text" name="designation" class="designation" placeholder="Enter your designation">
        
        <label for="date">DATE:</label>
        <input type="date" name="date" class="date">
        
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
