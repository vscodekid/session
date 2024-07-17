<!-- Create two tables teacher (tid, name, department, designation, dob, mobno) and subject(sid, 
tid, subject). Insert five records in each table. Design php pages for searching teacher’s 
data and display subject details of that teacher using tid. -->


<html>
    <head>
    <style>
        body{
            align-items:center;
            margin: 0;
            font-family: 'Times New Roman', Times, serif;
            display: flex;
            height: 100vh;
            justify-content: center;
            
            background-color: #ccc;
        }
        form{
            background-color: #f3f3f3;
            width: 300px;
            padding: 70px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.8);
        }
        label{
            display: block;
            margin-bottom: 14px;
            font-weight: bold;
        }
        input[type="text"]{
            border-collapse:collapse;
            border: 1px solid #ccc;
            border-radius: 30px;
            padding: 10px;
            width: 100%;
        }
        .search{
            background-color: green;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
        }
    </style>
    </head>

    <body>
        <form action="display.php" method="post">
            <label for="tid">Teacher ID: </label>
            <input type="text" name="tid" placeholder="enter the Teacher id" required><br><br>
            <input type="submit" value="Search" class="search" name="btn">
        </form>
    </body>
</html>