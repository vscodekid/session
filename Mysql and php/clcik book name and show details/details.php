
    <?php
        $conn = mysqli_connect("localhost", "root", "", "book1");

        if (mysqli_connect_errno()) {
            die("Connection unsuccessful: " . mysqli_connect_error());
        }

        if (isset($_GET['id'])) {
            $title =$_GET['id'];
            $query = "SELECT * FROM bookdata WHERE title = '$title'";
            $result = mysqli_query($conn, $query);

            if ($result->num_rows > 0) {
                echo "<table    border=1>";
                echo "<tr><th>Book Title</th><th>Book ID</th><th>Author</th><th>Price</th><th>Publisher</th><th>Number of Pages</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["bookid"] . "</td>";
                    echo "<td>" . $row["author"] . "</td>";
                    echo "<td>" . $row["price"] . "</td>";
                    echo "<td>" . $row["publisher"] . "</td>";
                    echo "<td>" . $row["number_of_pages"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No details found for the book title: " . $title . "</p>";
            }
        } else {
            echo "<p>No book title provided.</p>";
        }

        mysqli_close($conn);
    ?>
