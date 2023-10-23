﻿<?php
$serverna = "sql308.epizy.com";
$userna = "epiz_24378761";
$passwo = "Rafhath1236438";
$dbna = "epiz_24378761_college";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Now you can use $conn for your database operations
?>
