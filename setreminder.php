<!DOCTYPE html>
<html>
<head>
	<title>Set Reminder</title>
</head>
<body>
	<center>
		<h1> Set Reminder </h1>
		<form action="sdsetreminder.php" method="post">
<table>

<tr><td>
	<p><label for="date">Date:</label></td>
    <td><input type="date" name="daterem"/>
    <br><br></tr>

	
	<tr><td>
	<p><label for="subject">Subject:</label></td>
    <td><select id="subject" name="subject">
      <option value="">enter something</option>
	  <option value="study">Study</option>
      <option value="jogging">Jogging</option>
      <option value="eating">Eating</option>
    </select>
    <br><br></tr>
	
	
	<tr><td>
    <p><label for="Add Description">Add Description:</label> </td>
    <td><textarea id="subject" name="description" placeholder="Write something.." style="height:50px"></textarea>
	<br></td></tr></p>
	
	
	<tr><td>
	<label>Email:</td><td>
	<input type="email" name="email">
	</label>

	</td>
	</tr>
		
	<tr><td>
	<label>Contact No.:</td><td>
	<input type="tel" name="contact">
	</label>
	<br></td>
	</tr>
	
	<tr><td>
	<label>SMS No.:</td><td>
	<input type="tel" name="sms">
	</label>
	<br></td>
	</tr>
	
	<tr><td><p><label for="recur for next">recur for next:</label></td>
<td>
<input type="checkbox" name="days" value="7 days"> 7 days
<input type="checkbox" name="days" value="7 days"> 5 days
<input type="checkbox" name="days" value="5 days">3 days 
<input type="checkbox" name="days" value="2 days"> 2 days
</td>
</tr>
	<br><tr>
	<td><a href="homepage.html"><input type="button" value="Back"></a></td>
	<td><input type="submit" value="Confirm"></td>
	<td><a href="logoutcode.php"><input type="button" value="logout"></a></td>
	</tr></p>

</table>
  </form>
	</center>
</body>
</html>