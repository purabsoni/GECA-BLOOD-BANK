<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor registration</title>
<link href ="E:\xampp\htdocs\bbms\css\style.css" rel= "stylesheet" type = "text/css" >
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
                  <form action = "" method="post">
                <table>
                            <tr>
                                <td width="200px" height="50px">Name</td>
                                <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                                <td width="200px" height="50px">Father's Name</td>
                                <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father Name"></td>
                            </tr>
                            <tr>
                                <td width="200px" height="50px">Address</td>
                                <td width="200px" height="50px"><textarea name="address" placeholder="Enter address"></textarea></td>
                                <td width="200px" height="50px">City</td>
                                <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
                            </tr>
                            <tr>
                                <td width="200px" height="50px">Age</td>
                                <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td> <td width="200px" height="50px">Select Blood Group</td>
                                <td width="200px" height="50px">
                                    <select name="bgroup">
                                        <option>o+</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td width="200px" height="50px">E-Mail</td>
                                <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td> 
                                <td width="200px" height="50px">Mobile No</td>
                                <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"></td>
                            </tr>
                            <tr>     
                                 <td><input type="submit" name="sub" value="Save" ></td>
                            </tr> 
                </table> 
                </form>
                <?php
                if (isset($_POST['sub'])){
                    $name=$_POST['name'];
                    $fname=$_POST['fname'];
                    $address=$_POST['address'];
                    $city=$_POST['city'];
                    $age=$_POST['age'];
                    $bgroup=$_POST['bgroup'];
                    $email=$_POST['email'];
                    $mno=$_POST['mno'];
                    
                    $q=$db->prepare("INSERT INTO donor_registration1 (name,fname,address,city,age,bgroup,email,mno) VALUES
                    (:name,:fname,:address,:city,:age,:bgroup,:email,:mno)");
                    $q->bindValue('name',$name);
                    $q->bindValue('fname',$fname);
                    $q->bindValue('address',$address);
                    $q->bindValue('city',$city);
                    $q->bindValue('age',$age);
                    $q->bindValue('bgroup',$bgroup);
                    $q->bindValue('email',$email);
                    $q->bindValue('mno',$mno);

                    if($q->execute())
                    {
                        echo "<script> alert ('donor registration successful') </script> ";
                    }
                    else{
                        echo "<script> alert ('donor registration fail') </script> ";
                    }
                }
             ?>
              </div></center>
            </div>
            <div id="footer">
                <p align ="center"><a href="logout.php">Logout</a></p>
            </div>
        </div>
        </div>
    </body>
</html>