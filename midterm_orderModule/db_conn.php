<!-- db_conn.php -->
<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ordermodule";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}