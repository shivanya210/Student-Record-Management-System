
<!DOCTYPE HTML>
<html>

    <head>
        <title>VIEW_PAGE</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="main.css" />
        
    </head>
    <body class="landing">
        <div id="page-wrapper">

            <!-- Header -->
                <header id="header" class="alt">
                    <h1><a href="index.html">Student Management System</a> by Shivani Singh</h1>
                    <nav id="nav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="view.php">View</a></li>
                            
                            
                        </ul>
                    </nav>
                </header>

            <!-- Banner -->
                <section id="banner">
                    <h2>VIEW ENTRY</h2>
                    <p>Please enter the following informations inorder to View a record from the database.</p>
                 
<form method="post" action="show1.php ">
<center>
Registration Number:<br>
<input type="text" name="reg" style="width:300px;color:black"><br>

Name of the Student:<br>
<input type="text" name="name" style="width:300px;color:black"><br>
City:<br>
<select style="width:300px;color:black" name="city">
  
<?php

require 'connect.php';

 $conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
// Attempt select query execution

$sql = "SELECT DISTINCT city FROM student;";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{  
while($row = mysqli_fetch_array($result)){
echo '<option value='.$row['city'].'>'.$row['city'].'</option>';
}
  
}


?>

</select><br>

<input type="submit" name="submit" value="Search"><br>
<br>
</center>
</form>


                    
                </section>
        
        </div>
    </body>
</html>
