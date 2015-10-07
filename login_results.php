<?php
$con=mysqli_connect("aura.freezoy.com","root","ujjwal","frzoy_15090153_aura");
if(mysqli_connect_errno())
{
		die("Connection Error: ".mysqli_error());
	
}
$_name=test_input($_POST['username']);
$_password= test_input($_POST['password']);

$result = mysqli_query($con,"SELECT * FROM user_table");

while($row=mysqli_fetch_array($result))
{	if($_name===$row['UserName'])
	{	
		if ($_password===$row['Password'])
		{
			ini_set('session.name','AURA');
			//If you do not like the name of the session name created, i.e. PHPSESSID then use the a written code.
			session_start();
			$_SESSION['user']=$_POST['username'];
			
?>
			<script type="text/javascript">
			window.location = "home.php";
			</script>
<?php
			
		}
		else
		{ 
?>
			<script type="text/javascript">
			window.location = "login.php";
			</script>
<?php
		}
	}
	
}

function test_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

?>