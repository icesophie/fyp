<?php
$servername = "localhost";
$username = "root";
$password= null;
$dbname = "fyp";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname );

//check connection
if ($conn->connect_error)
{
    die("connection failed: " . $conn->connect_error);
}
//echo "connected successfully";

?>