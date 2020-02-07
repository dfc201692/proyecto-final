<?php
$server = "localhost";
$user = "root";
$pass = "";

// Using object oriented MySQLi for MySQL connection
$connection = new mysqli($server, $user, $pass);

// Checking if connection has succesfully established
if ($connection->connect_error) {
    die("Connection not established: " . $connection->connect_error);
} 
    
// Dropping Database
$query = "DROP DATABASE fgdf";
if ($connection->query($query) === TRUE) {
    echo "Database dropped successfuly.";
} else {
    echo "Unable to drop database " . $connection->error;
}

$connection->close();
?>
   