<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor registration</title>
<link href ="E:\xampp\htdocs\bbms\css\style.css" rel= "stylesheet" type = "text/css" >
<style type ="text/css">
td{
 width:200px;
 height:50px;
}

</style>
</head>
<body>
    <div id="full">
        <div id="inner_full">
            <div id="header"><h2 align="center" ><a href="admin-home.php">GECA Blood bank</a></h2></div>
            <div id="body">
                <br>
                <?php
              $un=$_SESSION['un'];

                if(!$un){
                    header("location:index1.php");
                }
                ?>
                <h1 align="center">blood stoke list</h1><br><br>
              <center> <div id = "form">
            <table>
                <tr>
                    <td><center><b>Name</b></center></td>
                    <td><center><b>Qty</b></center></td>
            </tr>
            <tr>
                    <td><center>o+</center></td>
                    <td><center>
                        <?php
                        $q=$db->query("SELECT *from donor_registration1 WHERE bgroup='o+'");
                        echo $row=$q->rowcount();
                        ?>
                    </center></td>
                </tr>
                <tr>
                    <td><center>AB+</center></td>
                    <td><center>
                    <?php
                        $q=$db->query("SELECT *from donor_registration1 WHERE bgroup='AB+'");
                        echo $row=$q->rowcount();
                        ?>
                    </center></td>
                </tr>
                <tr>
                    <td><center>AB+</center></td>
                    <td><center>
                    <?php
                        $q=$db->query("SELECT *from donor_registration1 WHERE bgroup='AB-'");
                        echo $row=$q->rowcount();
                        ?>
                    </center></td>
                </tr>
            </table>
              </div></center>
            </div>
            <div id="footer">
                <p align ="center"><a href="logout.php">Logout</a></p>
            </div>
        </div>
        </div>
    </body>
</html>