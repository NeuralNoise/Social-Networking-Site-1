<?php
session_start();
		if(isset($_SESSION['userlogin']))
		{
			echo "Welcome ".$_SESSION['userlogin'];
			unset($_SESSION['friend']);
			?>
<html>
<head>
<title>Home</title>
<strong><a href="home.php"><h1>Aura- Home</h1></a></strong>
</head>

<a href="upload.php"><h3>Upload Files</h3></a>
<a href="practice/connection.php"><h3>Connections</h3></a>
<a href="dates.php"><h3>Dates</h3></a>
<a href="settings.php"><h3>Settings</h3></a>
<a href="practice/myProfile.php"><h3>My account</h3></a>
<form method="post" action="Logout.php">
<input type="Submit" value="Logout">
</form>
</html>
			
	<?php	}
		else
		{
?>
			<script type="text/javascript">
			window.location = "login.php";
			</script>
<?php
		}
?>