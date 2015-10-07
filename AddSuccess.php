<?php
session_start();
	if(isset($_SESSION['userlogin']))
	{	$user=$_SESSION['userlogin'];
	$day=$_POST['date'];
	$month= $_POST['month'];
	$year=$_POST['year'];
	$title=$_POST['title'];
	$description=$_POST['description'];
$con= mysqli_connect("localhost","root","","aura");
//Connect to a MySql
/*if(mysqli_conect_errno())
{
echo "Failed to connect to the MySQL".mysqli_connect_errno();
}*/
$date =$year."-".$month."-".$day;
$sql="INSERT INTO dates values(\"$user\",\"$date\",\"$title\",\"$description\")";
if(mysqli_query($con,$sql))
{
	echo "Date added successfully";
}
else{
echo "Error adding Date: ".mysqli_error($con);
}
}
else 
	{	?>
	<script="text/javascript">
	window.location("/aura/login.php");
	</script>
	<?php
	}
?>
