<!DOCTYPE HTML>
<html>

    <head>
        <title>DELETION_PAGE</title>
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
                    <h2>DELETE ENTRY</h2>
                    <p>Please enter the following informations inorder to Delete a record from the database.</p>
                    <form method="post" action="delete1.php">
                       <center>
                          Registration Number:
                          <input type="text" name="reg" style="width:300px;color:black"><br>
                          Student Name:
                          <input type="text" name="name" style="width:300px;color:black"><br>
                          <input type="submit" name="submit" value="submit">
                       </center>
                    </form>
                    
                </section>
        
        </div>
    </body>
</html>
