<?php
$con= mysqli_connect("localhost","root","","aura");
//Connect to a MySql
if(mysqli_connect_errno())
{
echo "Failed to connect to the MySQL".mysqli_connect_errno();
}
/*Create DataBase
$sql="CREATE DATABASE my_db";
if(myqli_query($con,$sql))
{
echo "DataBase Created Successfully!";
}
else
{
echo "Error Creating DataBase ".mysqli_errno($con);
}

/*Create Table
$sql="CREATE TABLE User(User_id int 'primary key' 'NOT NULL', User_Name varchar(25) 'NOT NULL', KeyPass varchar(15) 'NOT NULL',friend_id int)";
if(mysqli_query($con,$sql))
{
	echo "User-Table created successfully";
}
else{
echo "Error Creating table: User".mysqli_error($con);
}*/


//Creating Date Table

$sql="CREATE TABLE Dates(Event integer primary key,Date date,title varchar(30), description varchar(250))";		//Auto-increment the primary key's balue
if(mysqli_query($con,$sql))
{
	echo "Date-Table created successfully";
}
else{
echo "Error Creating table: Date ".mysqli_error($con)."<br>";
}
?>