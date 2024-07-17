<!-- Create a table book (bookid, title, author, price, publisher and number_of_pages) and insert 
five records. Design a php page for list all distinct titles and when clicking on the title, it 
should show a second page giving book details. -->
    <h1>List of Book Titles</h1>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "book1");

        if (mysqli_connect_errno()) {
            die("Connection unsuccessful: " . mysqli_connect_error());
        }

        $query = "SELECT title FROM bookdata";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Book Title</th></tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><a href='details.php?id=" .$row['title']."'>" . $row['title'] . "</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No books found.</p>";
        }

        mysqli_close($conn);
    ?>
