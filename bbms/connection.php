<?php
$db=new Pdo('mysql:host=localhost;dbname=bbms','root','');
if($db)
{
    echo "connect";
}
else
{
    echo "not connect";
}
?>