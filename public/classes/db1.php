<?php
$servername = "campus-connect-db.chm0q2ogqbv7.us-east-2.rds.amazonaws.com";  
$username = "admin"; 
$password = "campusconnectdb"; 
$dbname = "campusconnectdb";  

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>