<?php
$con=mysqli_connect("localhost","root","","aura");
if(mysqli_connect_errno())
{
		echo "Connection Error: ".mysqli_error();
	
}
$_name=test_input($_POST['username']);
$_password= test_input($_POST['password']);

$result = mysqli_query($con,"SELECT * FROM user_table");

while($row=mysqli_fetch_array($result))
{	if($_name==$row['UserName'])
	{	
		if ($_password===$row['Password'])
		{
		session_start();
      //Store the name in the session
      $_SESSION['userlogin'] = $_name;
		$_SESSION['user_id']=$row['User_ID'];
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
mysqli_free_result($result); 
?>
			<script type="text/javascript">
			window.location = "login.php";
			</script>
<?php

function test_input($data){
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}

?>