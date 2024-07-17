<!-- Design tables to store book details (bookno, tittle, author, price, date of purchase) and 
insert five records. Create a search page in php for displaying book details based on its title.  -->
<html>
<head>
    <title>Book Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: #fff;
            padding: 70px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .search {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background: #28a745;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="searchresult.php" method="POST">
        <label for="search">Search</label>
        <input type="text" name="search" class="search" placeholder="Enter the values to be searched">
        <input type="submit" value="Search" name="btn">
    </form>
   
</body>
</html>