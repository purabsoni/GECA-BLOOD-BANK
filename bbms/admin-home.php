<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>admin login</title>
<link href ="E:\xampp\htdocs\bbms\css\style.css" rel= "stylesheet" type = "text/css" >
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="header"><h2 align="center" >GECA Blood bank</h2></div>
            <div id="body">
                <br>
                <?php
              $un=$_SESSION['un'];

                if(!$un){
                    header("location:index1.php");
                }
                ?>
                <h1 align="center">Welcome Admin</h1><br><br>
                <ul>
<li><a href="donor-reg.php">Donor Registration</a></li>
<li><a href="donor-list.php">Donor List</a></li>
<li><a href="blood-stoke-list.php">Stoke Blood List</a></li>
</ul><br><br><br><br><br>
            </div>
            <div id="footer">
                <p align ="center"><a href="logout.php">Logout</a></p>
            </div>
        </div>
        </div>
    </body>
</html>