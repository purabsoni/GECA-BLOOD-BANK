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
                <h1 align="center">Donor resigtration</h1><br><br>
              <center> <div id = "form">
            <table>
                <tr>
                    <td><center><b>name</b></center></td>
                    <td><center><b>father's name</b></center></td>
                    <td><center><b>address</b></center></td>
                    <td><center><b>city</b></center></td>
                    <td><center><b>age</b></center></td>
                    <td><center><b>Blood-group</b></center></td>
                    <td><center><b>E-mail</b></center></td>
                    <td><center><b>mobile no.</b></center></td>    
                </tr>
                <?php
                $q=$db->query("SELECT*from donor_registration1");
                while($r1=$q->fetch(PDO::FETCH_OBJ))
{
                ?>
                <tr>
                    <td><center><?=$r1->name;?></center></td>
                    <td><center><?=$r1->fname;?></center></td>
                    <td><center><?=$r1->address;?></center></td>
                    <td><center><?=$r1->city;?></center></td>
                    <td><center><?=$r1->age;?></center></td>
                    <td><center><?=$r1->bgroup;?></center></td>
                    <td><center><?=$r1->email;?></center></td>
                    <td><center><?=$r1->mno;?></center></td>
                </tr>
                <?php
}
?>
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