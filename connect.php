<?php
$servername = "localhost";
$username = "root";
$password = "shivani@123";
$dbname = "student";
$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
	die("failed  " .mysqli_connect_error());

}

//echo "connected to db \n";

?>
