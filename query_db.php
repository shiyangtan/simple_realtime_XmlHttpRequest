<?php

$keyword = $_GET['keyword'];

// login credentials
$servername = "localhost";
$username = "newuser";
$password = "password";
$dbname = "america_major_cities";
$port = 8889;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// get records from stored procedure
$result = $conn->query("CALL get_cities_by_keyword('$keyword');");

// close mysql connection
$conn->close();

// fetch records and return to client-side
$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}

echo json_encode($emparray);

?>
