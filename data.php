<?php
$uname=$_POST['uname'];
$mobile=$_POST['mobile'];
$pass=$_POST['pass'];
if($con=mysqli_connect("localhost","root","","aura"))
{
	
$query="INSERT INTO user_table(UserName,Password,Mobile) values('$uname','$pass','$mobile')";
	if(mysqli_query($con,$query))
		{
			echo "User Added!";
		}
		}	
else
{
		echo "Failed to connect to DataBase";
}
?>