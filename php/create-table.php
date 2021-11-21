<?php

//Attempt to connect toMySQL and print out messages:
if ($conn = mysqli_connect('localhost', 'root', '', 'userform')) {

   // Define the query:
   $query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email varchar(20) NOT NULL,
    name varchar(255) NOT NULL,
    password varchar(255) NOT NULL
  )';

    // Execute the query:
    if (@mysqli_query($conn, $query)) {
        print '<p>The table has been created.</p>';
    } else {
        print '<p style="color: red;">Could not create the table because:<br />' . mysqli_error($conn) .
        '.</p><p>The query being run was: '. $query . '</p>';
    }
mysqli_close($conn); // Close the connection.
} else { //Connectionfailure
    print'<p style="color: red;"> Could not connect to the database: <br>'.mysqli_connect_error().'.</p>';
}
?>
</body>
</html>