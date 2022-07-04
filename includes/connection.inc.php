<?php
function dbcon()
{
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'example';
	$conn=mysqli_connect($server,$username,$password,$db_name);
	if(!$conn)
	{
		die('505 Unable to Connect to the Server'.mysqli_error());
	}
	return $conn;
}
?>