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
					<h2>YOUR SEARCH RESULT</h2>
					<p><br><br><br></p>

<?php

require 'connect.php';

 $reg=$_POST['reg'];
 $name=$_POST['name'];
 $city=$_POST['city'];


 $conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
// Attempt select query execution
$sql = "SELECT * FROM student WHERE reg_no=$reg AND student_name='$name' AND city='$city'";
if($result = mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table  style=color:blue;font-style:italic;>";
            echo "<tr style=font-variant:large-caps;font-style:bold;color:black;font-size:30px;>";
                echo "<th>reg_no</th>";
                echo "<th>student_name</th>";
                echo "<th>current_cgpa</th>";
                echo "<th>father_name</th>";
                echo "<th>mother_name</th>";
                echo "<th>parent_number</th>";
                echo "<th>city</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr style=font-size:25px;>";
                echo "<td>" . $row['reg_no'] . "</td>";
                echo "<td>" . $row['student_name'] . "</td>";
                echo "<td>" . $row['current_cgpa'] . "</td>";
                echo "<td>" . $row['father_name'] . "</td>";
                echo "<td>" . $row['mother_name'] . "</td>";
                echo "<td>" . $row['parent_number'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";            
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "OOPS!!: Required fields does not exist in Database.";
    }
} else{
    echo "OOPS!!: Required fields does not exist in Database.";
}
 
// Close connection
mysqli_close($conn);

?>
</div>
</body>
</html>
