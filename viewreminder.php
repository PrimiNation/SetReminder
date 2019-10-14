<?php
$con = new mysqli('localhost','root','','user');
/*if($con->connect_error)
{
	die ("<h3 style='color:red'>Connection Failed<h3>".$con->connect_error);
}
echo "Connection Successfully";
*/
// print_r($_FILES['']); to see how file name are stored in array

$sql = "SELECT * FROM setreminder";
$res = $con->query($sql);
if($res->num_rows>0)
{
	echo "<center><h1>View Reminder</h1>";
	echo "<table cellspacing=5px cellpadding=5px border=2px solid black>";
	echo "<tr>
			<th>ID</td>
			<th>Date</td>
			<th>Subject</th>
			<th>Description</th>
			<th>Email</th>
			<th>Contact</th> 
			<th>SMS</th>
		  </tr>";
	while($row = $res->fetch_assoc())
	{
		echo "<tr>
				<td>".$row["ID"]."</td>
				<td>".$row["daterem"]."</td><td>".$row["subject"]."</td><td>".$row["description"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["sms"]."</td></tr>";
	}
	echo "<table></center>";
}
else
{
	echo "0 results";
}
//header("location:reg.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Reminder</title>
</head>
<body><br/>
	<table>
		<tr>
	<td><a href="homepage.php"><input type="button" value="Back">
	</a></td>
	 <td><a href=modifyreminder.php><input type="button" value="Modify Reminder"/></a></td>
	 <td><a href=disablereminder.php><input type="button" value="Disable Reminder"/></a></td>
	 <td><a href=deletereminder.php><input type="button" value="Delete Reminder"/></a></td>
	 </tr></table>
</body>
</html>

