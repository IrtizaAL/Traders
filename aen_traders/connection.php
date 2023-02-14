<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="aen_traders";

$con = mysqli_connect($servername,$username, $password, $dbname );

if($con)
{
	echo"";
}
else
{
	echo"not connected";
}
?>