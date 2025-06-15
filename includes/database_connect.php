<?php
$host = "localhost";
$user = "root";
$password = ""; // <- no password for XAMPP default root user
$dbname = "pg_life";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

