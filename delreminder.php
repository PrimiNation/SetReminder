<?php
$con = new mysqli('localhost','root','','user');
$ID = $_GET['id'];

echo "hello";
$del = "DELETE FROM setreminder WHERE ID ='$ID'";
$con->query($del);
header("location:deletereminder.php");
?>