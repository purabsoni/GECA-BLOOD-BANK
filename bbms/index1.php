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
            <div id="header"><h2 align="center" ><a href="index.php">GECA Blood bank</a></h2></div>
            <div id="body">
                <br><br><br><br><br>
                <form action = "" method="post">
                <table align="center">

                    <tr>
                        <td width="100px" height="50px"><b>Enter username</b></td>
                        <td width="100px" height="50px"><input type="text" name="un" placeholder="enter username"></td>
                        
                    </tr>
                    <tr>
                        <td width="100px" height="50px"><b>enter password</b></td>
                        <td width="100px" height="50px"><input type="text" name="ps" placeholder="enter password"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><input type ="submit" name = "sub" value ="login"></td>
                    </tr>
                </table>
</form>
<?php
if (isset ($_POST['sub']))
{
    $un=$_POST['un'];
    $ps=$_POST['ps'];
    $q=$db -> prepare("SELECT * FROM admin WHERE uname='$un' && pass='$ps'"); 
    $q->execute();
    $res=$q-> fetchAll (PDO::FETCH_OBJ);
    if($res)
    {
        $_SESSION['un']=$un;
        header ("location:admin-home.php");

    }
    else
    {
        echo "<script>alert('wronge user')</script>";
    }

}
?> 
            </div>
            <div id="footer" align="right">Mohit tater 19Cs57</div>
            <div id="footer" align="right">Purab soni 19Cs73</div>
            <div id="footer" align="right">Mohit deswal 19Cs56</div>
            <div id="footer" align="right">Priya choudhary 19Cs72</div>
        </div>
        </div>
    </body>
</html>