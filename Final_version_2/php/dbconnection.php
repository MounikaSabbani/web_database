<?php
$server = "localhost";
$username = "";
$password = "";
$database = "";
//$file_location = "/~username/Project/Attempt1/";


// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{ 
	
}

?>