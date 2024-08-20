<?php
$servername = "localhost"; 
$username = "root";         
$password = "Jeeva@24";             
$dbname = "spice_route";   

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>