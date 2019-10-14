<?php
session_start();
if(isset($_SESSION['id']))
        {
           echo "session";
           
        }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
<h1 align="center">User Login</h1>
<form action="logincode.php" method="post">
    <table align="center" style="margin-top:50px;">

        <tr>
        <td>Email</td>
        <td><input type="email" name="Email"/></td>
        </tr>

        <tr>
        <td>Password</td>
        <td><input type="password" name="Password"/></td>

        </tr>
        <tr align="center"><td colspan="2"><input type="submit" name="login" value="submit"/></td></tr>

    </table>
</form>

<h2> <a href="index.php">Go To HomePage</a></h2>

</body>
</html>
