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
require_once 'connect.php';


$reg= $_POST['reg'];
$name= $_POST['name'];
$cgpa=$_POST['cgpa'];
$father=$_POST['father'];
$mother=$_POST['mother'];
$number=$_POST['number'];
$city=$_POST['city'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO student (reg_no,student_name,current_cgpa,father_name,mother_name,parent_number,city)
VALUES ($reg,'$name',$cgpa,'$father','$mother',$number,'$city')";

if ($conn->query($sql) === TRUE) {
    
echo '<script language="javascript">';
echo 'alert("successfull!!")';
echo '</script>';




} else {

echo '<script language="javascript">';
echo 'alert("unsuccessfull!!review your error")';
echo '</script>'; 
}

$conn->close();


?>


</div>
</body>
</html> 
