<?php
require 'connection.php';
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$confirm_pass = $_POST['confirm_password'];

// echo $pass;
// echo $email;
// echo $name;

//$con = mysqli_connect('localhost', 'root', '','attendance_management');

$query = "INSERT INTO `manager`( `name`, `email`, `password`,`confirm_password`) VALUES ('$name', '$email', '$pass', '$confirm_pass')";

$run = mysqli_query($con, $query);

if($run == TRUE)
     echo "Data insert sucessful";
 else
 	echo "error !";

?>