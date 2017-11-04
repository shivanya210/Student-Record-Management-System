<?php
$database_host ="localhost";
$database_user ="root";
$database_password ="shivani@123";
$database_name ="student";
$conn=NULL;
if($conn=mysqli_connect($database_host,$database_user,$database_password,$database-name))
{
echo "connected";
}
else
echo"not able to connect";
?>
