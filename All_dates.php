<?php
//Creating Table
$con= mysqli_connect("localhost","root","","aura");
//Connect to a MySql
if(mysqli_connect_errno())
{
echo "Failed to connect to the MySQL".mysqli_connect_errno();
}
//Create Table
$sql="select * from dates";
$result=mysqli_query($con,$sql);
echo "Added By	|	Date	|	Title	|	Description";
while($row=mysqli_fetch_array($result))
{	if($row['UserName']==null)
	{
		echo "				".$row['Date']."	".$row['title']."	".$row['description']."<br>";
	}	
		else
		{
			echo $row['UserName']."		".$row['Date']."	".$row['title']."	".$row['description']."<br>";
		}
}
?>