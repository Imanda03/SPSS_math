<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "web";
$conn = new mysqli($host, $username, $password, $database);
if($conn->connect_errno){
    echo "Database connection failed" . $conn->conect_error;
    exit();
}