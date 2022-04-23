<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

// Connect

$servername = "localhost";
$username = "fishtech_admin";
$password = "abcdadmin";
$dbname = "fishtech_user_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Perform database query
$query = "SELECT * from user";
$result = $conn->query($query) or die('Query failed: ' . mysql_error());

  if ($result->num_rows > 0) {

    // output data of each row
    $index = 0;
    echo "[";
    while($row = $result->fetch_assoc()) {
        $index++;
        echo json_encode($row);
        if ($index < $result->num_rows) {
            echo ",";
        }
        }
    } else {
        echo "0 results";
        }
    echo "]";
?>
