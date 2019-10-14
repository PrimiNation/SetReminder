<html>
<br><br><br><br>

<center><h1> Enable Reminder </h1>

<div class="container">
  <form action="action_page.php">
<table>

<tr><td>
	<p><label for="date">Date:</label></td>
    <td><input type="date" data-date-inline-picker="true" />
    <br><br></tr>

	
	<tr><td>
	<p><label for="subject">Select Subject:</label></td>
    <td><select id="subject" name="subject">
      <option value="">enter something</option>
	  <option value="study">Study</option>
      <option value="jogging">Jogging</option>
      <option value="eating">Eating</option>
    </select>
    <br><br></tr>
	
	<tr><td>
    <label for="Reminder">Reminder:</label></td>
    <td><select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select><br></td></tr>
	
	<tr><td>
    <p><label for="Add Description">Description:</label> </td>
    <td><textarea id="subject" name="subject" placeholder="Write something.." style="height:50px"></textarea>
	<br></td></tr></p>
	
	<tr><td>
	<label>Email:</td><td>
	<input type="email" name="email_address">
	</label>

	</td>
	</tr>

	
	<tr><td>
	<label>Contact No.:</td><td>
	<input type="number" name="contact number">
	</label>
	<br></td>
	</tr>
	
	<tr><td>
	<label>SMS No.:</td><td>
	<input type="number" name="contact number">
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
	


	<td><input type="button" value="Back"  onclick="javascript:history.go(-1)"></td>
	<td><input type="submit" value="Confirm"></td>
	<td><input type="submit" value="logout"></td>
	</tr></p>
</table>
  </form>
</div>
</center>
</html>