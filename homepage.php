<?php
session_start();
if ($_SESSION['Password']=="")
{
  header("location:index.php");
}
else
{
  
}
?>
<html>
   <head>
      <title>Reminder Application</title>
   </head>
   <body>
   <center>
   <h1>Welcome to the Reminder Application <?php echo $_SESSION['username']?></h1>
   <h3>Today is:<?php date_default_timezone_set("Asia/Calcutta");
$date = date('m/d/Y', time());
echo $date ?></h3>
      <form>
         <a href=setreminder.php><input type="button" value="Set reminder"/><br></a>
		 <br>
		  <a href=modifyreminder.php><input type="button" onclick="modifyreminder.html" value="Modify Reminder"/><br></a>
		   <a href=disablereminder.php><br><input type="button" onclick="disablereminder.html" value="Disable Reminder"/><br></a>
		   <br> <a href=deletereminder.php><input type="button" onclick="deletereminder.html" value="Delete Reminder"/><br></a>
		   <br> <a href=enablereminder.php><input type="button" onclick="enablereminder.html" value="Enable Reminder"/><br><a>
		    <br> <a href=viewreminder.php><input type="button" onclick="viewreminder.html" value="View Reminder"/><br></a>
      </form>
	  </center>
     <a href="logoutcode.php"><input type="button" value="logout">
   </body>
</html>