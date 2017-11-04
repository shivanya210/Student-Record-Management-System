<?php
$database_host ="localhost";
$database_user ="root";
$database_password ="shivani@123";
$database_name ="student";
$conn=new mysqli($database_host,$database_user,$database_password,$database_name)
if($conn->connect_error)
{
die("failed" .mysqli_connect_error());
  
}
else
echo"connected";
?>
