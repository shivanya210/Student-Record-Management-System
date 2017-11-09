<!DOCTYPE HTML>
<html>

	<head>
		<title>INSERT_PAGE</title>
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
					<h2>RECORD ENTRY</h2>
					<p>Please enter the following informations inorder to insert a new record into the database.</p>
					<form method="post" action="insert_scr.php">
					<center>
                      Registration Number:
                      <input type="text" name="reg" style="width:300px;color:black"><br>
                      Student Name:
  <input type="text" name="name" style="width:300px;color:black"><br>

Current CGPA:
<input type="text" name="cgpa" style="width:300px;color:black"><br>
Father's Name:
<input type="text" name="father" style="width:300px;color:black"><br>
Mother's Name:
<input type="text" name="mother" style="width:300px;color:black"><br>
Parent's Contact Number:
<input type="text" name="number" style="width:300px;color:black">
<br>
City:
<input type="text" name="city"style="width:300px;color:black">
<br>

<input type="submit" name="submit" value="submit">
</center>
</form>
					
				</section>
			

		</div>

		

	</body>
</html>
