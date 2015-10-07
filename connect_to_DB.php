<?php
$con= mysqli_connect("localhost","root","","aura");
//Connect to a MySql
if(mysqli_connect_errno())
{
echo "Failed to connect to the MySQL".mysqli_connect_errno();
}
?>