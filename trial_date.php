<?php

	connect("root","ujjwal");
//Connect to a MySql
if(mysqli_conect_errno())
{
echo "Failed to connect to the MySQL".mysqli_connect_errno();
}
//Create DataBase
$sql="CREATE DATABASE my_db";
if(msqli_query($con,$sql))
{
echo "DataBase Created Successfully!";
}
else
{
echo "Error Creating DataBase ".mysqli_errno($con);
}

	$date=$_POST['date'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	
	$sql="insert into date values(STR_TO_DATE('$date',%d/%m/%y),'')";

if(mysqli_query($con,$sql))
{
	echo "Date Added successfully";
}
else{
echo "Error adding date to the table ".mysqli_error($con);
}
?>

<html>
<head>
<title>ADD DATE
</title>
</head>
<body>
<form method="POST" action="$_PHP['SELF_SERVER']">
Date:  <input type="text" name="date"><br>
Title: <input type="text" name="title"><br>
Description:<input type="text" name="description"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
