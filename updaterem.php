<?php 
$con = new mysqli('localhost','root','','user');
if($con->connect_error)
{
	die("connection error".$con->connect_error);
}
if($_REQUEST['id']){
	$id = $_REQUEST['id'];
	$edit = "SELECT * FROM setreminder where ID = '$id'";
	$result= $con->query($edit);
	$row = $result->fetch_array();
}
if(isset($_POST['update']))
{
	$daterem = $_POST['daterem'];
	$subject = $_POST['subject'];
	$description = $_POST['description'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$sms = $_POST['sms'];
	$updt = "UPDATE setreminder  SET daterem ='$daterem', subject = '$subject',description = '$description', email = '$email',contact = '$contact',sms='$sms'where ID ='$id'";
	if($con->query($updt)===TRUE)
	{
		echo '<script type="text/JavaScript">  
     prompt("Updated"); 
     </script>';
		header("location:modifyreminder.php");
	}
	else
	{
		echo "Error " .$updt. "<br/>" .$con->error;
	}
}
echo "<b><font color='red'>Please update your Reminder!</font></b>";
echo "<form action='' method='post' enctype='multipart/form-data'><table>
		<tr><td>Date : </td><td><input type='date' value='$row[daterem]' name='daterem'></td><br/>
			</tr>
			<tr>
				<td>Subject : </td><td><input type='text' value='$row[subject]' name='subject'></td><br/>
			</tr>
			<tr>
				<td>Description : </td><td><input type='text' value='$row[description]' name='description'></td><br/>
			</tr>
			<tr>
				<td>Email : </td><td><input type='text' value='$row[email]' name='email'></td><br/>
			</tr>
			<tr>
				<td>Contact : </td><td><input type='number' value='$row[contact]'name='contact'></td><br/>
			</tr>
			<tr>
				<td>SMS : </td><td><input type='number' value='$row[sms]' name='sms'></td><br/>
			</tr>
			<tr>
				<td><input type='submit' value='update' name='update'></td>
				<td><button><a href='modifyreminder.php'>Cancel</button></a></td>
			</tr>
		</table></form>";
?>