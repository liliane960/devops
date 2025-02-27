<?php

// Create connection
$conn = mysqli_connect("localhost","root","","lily_devops_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>