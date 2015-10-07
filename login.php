<?php
session_start();
if(isset($_SESSION['userlogin']))
{
	unset($_SESSION['userlogin']);
	unset($_SESSION['user_id']);
}
session_destroy();
?>
<html>
<head>
<title>
::LOGIN::
</title>
</head>
<form method="POST" action="confirmLogin.php">
UserName: <input type="text" name="username" ><br><br>
Password: <input type="password" name="password" ><br><br>
<input type="submit" name="submit" value="Submit">
</form>
<br>
<p>New to Aura? <a href="registration.html">Regitser</a>
</p>
</html>
