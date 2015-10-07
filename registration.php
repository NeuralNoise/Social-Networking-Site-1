<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$con=mysqli_connect("localhost","root","","aura");
if(mysqli_connect_errno())
{
		die("Connection Error: ".mysqli_error());
	
}
	$_name=test_input($_POST['name']);
	$_password=test_input($_POST['pass']);
	$_mobile=test_input($_POST['mobile']);
	
if(!empty($_name))
{	
	if(!empty($_password))
	{
	if(check($_name))
	{
	$query="INSERT INTO user_table(UserName,Password,Mobile) values('$_name','$_password','$_mobile')";
	if(mysqli_query($con,$query))
		{
			session_start();
      //Store the name in the session
      $_SESSION['userlogin'] = $_name;
		
?>
			<script type="text/javascript">
			window.location = "home.php";
			</script>
<?php
		}
			
else
{
		echo "Error while adding the User.";
}	
}
		else
		{
				echo "User Name already exists.";
		}
	}	
		else
		{
			echo "Password field is blank.";
		}
	}
	else
		{
			echo "User Name field is blank.";
		}
}

function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

function check($name)
{	$con=mysqli_connect("localhost","root","","aura");
	$query = "select * from user_table where UserName=\"$name\"";
	
	$result = mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
{
	return false;
}
mysqli_free_result($result);

			return true;
	
}
?>