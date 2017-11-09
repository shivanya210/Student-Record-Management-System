<html>
<head>
<title>SMS</title>
		

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="main.css" />

</head>
<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.html">Student Management System</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="view.php">View</a></li>
							
							
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>Query</h2>
					<p>What You Want To Do Next!!!!.<br><br><br></p>
<?php
require 'connect.php';

$reg=$_POST['reg'];
$name=$_POST['name'];


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "DELETE FROM student WHERE reg_no=$reg and student_name='$name'";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
echo 'alert("Record deleted successfully!!")';
echo '</script>';
} else {
    echo '<script language="javascript">';
echo 'alert("Unsuccessfull!!")';
echo '</script>';
}
?>

</div>
</body>
</html>
