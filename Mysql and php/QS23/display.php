<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Table</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 13px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: green;
            color: white;
        }
        .a1 {
            color: green;
            text-decoration: none;
            
        }
        
        .container {
            width: 90%;
            margin: auto;
        }
        .link {
            display: block;
            padding: 10px;
            margin-top: 30px;
            background-color: green;
            border-radius: 20px;
            width: 150px;
            text-align: center;
        }
        .link a {
            color: white;
            text-decoration: none;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <?php
        echo "<center>";
            $conn = mysqli_connect("localhost", "root", "", "employeedb");
            if(mysqli_connect_errno()) {
                die("Connection unsuccessful: " . mysqli_connect_error());
            }

            $select = "SELECT * FROM employees";
            $resselect = mysqli_query($conn, $select);
            if($resselect->num_rows > 0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>EMPLOYEE NAME</th>";
                echo "<th>EMPLOYEE ID</th>";
                echo "<th>EMPLOYEE SEX</th>";
                echo "<th>EMPLOYEE GRADE</th>";
                echo "<th>EMPLOYEE SALARY</th>";
                echo "<th>EMPLOYEE DESIGNATION</th>";
                echo "<th>EMPLOYEE DOJ</th>";
                echo "<th>UPDATE BUTTON</th>";
                echo "<th>DELETE BUTTON</th>";
                echo "</tr>";

                while ($rowselect = mysqli_fetch_array($resselect)) {
                    echo "<tr>";
                    echo "<td>" . $rowselect["name"] . "</td>";
                    echo "<td>" . $rowselect["empid"] . "</td>";
                    echo "<td>" . $rowselect["sex"] . "</td>";
                    echo "<td>" . $rowselect["grade"] . "</td>";
                    echo "<td>" . $rowselect["salary"] . "</td>";
                    echo "<td>" . $rowselect["designation"] . "</td>";
                    echo "<td>" . $rowselect["doj"] . "</td>";
                    echo "<td><a href='update.php?id=" . $rowselect["empid"] . "' class='a1'>Edit</a></td>";
                    echo "<td><a href='delete.php?id=" . $rowselect["empid"] . "' class='a1'>Delete</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "<div class='link'>";
                echo "<a href='form.php'>Insert new data</a>";
                echo "</div>";
            } else {
                echo "No records found";
            }
            echo "</center>";
            mysqli_close($conn);
        ?>
    </div>
</body>
</html>
