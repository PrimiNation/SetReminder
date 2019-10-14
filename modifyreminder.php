<?php
$con = new mysqli('localhost','root','','user');
$showtbl = "select * from setreminder";
$result = $con->query($showtbl);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Table</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
		table, tr, td, th
		{
			border:1px solid black;
			border-collapse: collapse;
		}
	</style>
	<!-- <script type="text/javascript">
		function del()
		{
			confirm("Are You Sure delete this row?");
		}
	</script>
 --></head>
<body>
	<button class="w3-btn w3-black"><a href="homepage.php">Back</a></button><br/>
	<table cellpadding="10px">
		<tr>
			<th>ID</th>
			<th>Date</th>
			<th>Subject</th>
			<th>Description</th>
			<th>Email</th>
			<th>Contact</th>
			<th>SMS</th>
			<th>Recure</th>
			<th>Operation</th>
		</tr>
		<?php 
		while($row=$result->fetch_assoc())
		{
		?>
		<tr style="border:1px solid black">
			<td><?php echo $row["ID"]?></td>
			<td><?php echo $row["daterem"]?></td>
			<td><?php echo $row["subject"] ?></td>
			<td><?php echo $row["description"]?></td>
			<td><?php echo $row["email"] ?></td>
			<td><?php echo $row["contact"] ?></td>
			<td><?php echo $row["sms"] ?></td>
			<td><?php echo $row["days"] ?></td>
			<td><button class="w3-btn w3-black"><a href="updaterem.php?id=<?php echo $row['ID']?>">Update</button></a><br/><br/>
		</tr>
		<?php
		} 
		?>
	</table>
	<br/>
	<button class="w3-btn w3-black"><a href="index.php">Logout</button>
</body>
</html>

