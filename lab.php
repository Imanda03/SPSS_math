<?php include "./database.php" ;
global $conn;
$sql = "insert into customers (CustomerName, ContactName, Address, PostalCode, Country, City) Values('Nischal Shrestha', 'nischhal','Banasthali','0012', 'Nepal', 'Kathmandu')";
mysqli_query(
    $conn , $sql
);