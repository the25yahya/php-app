<?php
// Function to establish database connection
function connectToDatabase() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "php_app";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to fetch some data from the database
function getSomeDataFromDatabase() {
    $conn = connectToDatabase();

    $sql = "SELECT * FROM myTable";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["name"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}
?>
