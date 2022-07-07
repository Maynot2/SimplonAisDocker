<?php

$servername = "db";
$username = "root";
$pass = $_ENV["USER_PASS"];

// Create connection
$conn = new mysqli($servername, $username, $pass);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$db_list = mysqli_query($conn, "SHOW DATABASES");

echo "<p>Un test</p>";

echo "<h1>Liste des bases de donnee:</h1>";

echo "<ul>";
while ($row = mysqli_fetch_array($db_list)) {
    echo "<li>" . "$row[0]" . "</li>";
}
echo "</ul>";
?>

