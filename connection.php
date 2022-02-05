<?php
$conn= mysqli_connect("localhost","root","","login");
if(mysqli_connect_error()){
	die("Failed to connect database".mysqli_connect_errno);
}
?>
