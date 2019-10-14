<?php
$con = new mysqli('localhost','root','','user');
session_start();
if($con->connect_error)
{
	die("Connection Failed".$con->connect_error);
}
else
{
	echo "Connection Successful";
}
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$lgn_qy = "SELECT * FROM login WHERE Email = '$Email' AND Password = '$Password'";
$_SESSION['Password'] = $Password;
$res = $con->query($lgn_qy);
if($row = $res->fetch_assoc())
{
	$Email = $row['Email'];
	$_SESSION['Password'] = $row['Password'];
	$_SESSION['username'] = $row['username'];
	header("location:homepage.php");
}
else
{
	header("location:index.php?msg=invalid_username or password");
}

?>
