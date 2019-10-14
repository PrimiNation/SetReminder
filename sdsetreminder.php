<?php
$con = new mysqli('localhost','root','','user');
/*if($con->connect_error)
{
	die ("<h3 style='color:red'>Connection Failed<h3>".$con->connect_error);
}
echo "Connection Successfully";

$ins_qy ="INSERT INTO setreminder(daterem, subject, description, email, contact, sms, days) VALUES ('$daterem','$subject','$description','$email','$contact','$sms', '$days')";*/

// print_r($_FILES['']); to see how file name are stored in array
$daterem = $_POST['daterem'];
$subject = $_POST['subject'];
$description = $_POST['description'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$sms = $_POST['sms'];
$days = $_POST['days'];
$ins_qy ="INSERT INTO setreminder(daterem, subject, description, email, contact, sms, days) VALUES ('$daterem','$subject','$description','$email','$contact','$sms', '$days')";
if($con->query($ins_qy)=== TRUE)
{
	echo "<h2>Insert Data Successfully<h2>";
}
else
{
	echo "Error " .$ins_qy. "<br/>" .$con->error;
}
$sql = "SELECT * FROM setreminder";
$res = $con->query($sql);
if($res->num_rows>0)
{
	echo "<table>";
	echo "<tr>
			<th>ID</td>
			<th>Name</td>
			<th>Address</th>
			<th>mobile</th>
			<th>DOB</th>
			<th>Pincode</th>
			<th>image</th>
		  </tr>";
	while($row = $res->fetch_assoc())
	{
		echo "<tr>
				<td>".$row["ID"]."</td><td>".$row["daterem"]."</td><td>".$row["subject"]."</td><td>".$row["description"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["sms"]."</td></tr>";
	}
	echo "<table>";
}
else
{
	echo "0 results";
}

//header("location:reg.php");
?>

