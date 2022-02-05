	<?php
	error_reporting(0);
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	
	if(!empty($fullname)||!empty($email)||!empty($phone)){
 $con = new mysqli("localhost","root","","registrations");
	if(mysqli_connect_error()){
		echo"error"; 
	}
    else{
		$select="select email from commu where email=? limit 1";
 $insert= "insert into commu(fullname,email,phone) values (?,?,?)";
 $stmt=$con->prepare($select);
 $stmt->bind_param("s",$email);
 $stmt->execute();
 $stmt->bind_result($email);
 $stmt->store_result();
 $rnum=$stmt->num_rows;
 
 if($rnum<=0){
	 if(strlen($phone)<10){
		   ?>
	 <div class="registrationresult3">
	 <?php
	 echo "Please enter a valid mobile number";
	 ?>
	 </div>
	 <?php 
	 }
	 else{
	 $stmt->close();
	 $stmt=$con->prepare($insert);
	 $stmt->bind_param("ssi",$fullname,$email,$phone);
	 $stmt->execute();
	 ?>
	 <div class="registrationresult">
	 <?php
	 echo "New record registered";
	 ?>
	 </div>
	 <?php
	 }
 }
 else{
	  ?>
	 <div class="registrationresult2">
	 <?php
	 echo "Already registered";
	 ?>
	 </div>
	 <?php 
 }
 $stmt->close();
$con->close(); 
}
    }
?>




<!DOCTYPE html>
<html>
<head>
<title>CBIT Club Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="registration.css" rel="stylesheet">

<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<style>
.registrationresult{
    color:white;
	position:absolute;
	top:70%;
	left:43%;	
}
.registrationresult2{
        color:white;
	position:absolute;
	top:70%;
	left:44%;	
}
.registrationresult3{
        color:white;
	position:absolute;
	top:70%;
	left:40.5%;	
}
</style>
</head>
<body style="background-color:black;">
	<div class="main-w3layouts wrapper">
		<a href="index.php"><h1>Join the Club</h1></a>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post">
					<input class="text" type="text" name="fullname" placeholder="Fullname" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="text" name="phone" placeholder="Phone Number" required="">

					<div class="wthree-text">
						<div class="clear"> </div>
					</div>
					<input type="submit" value="REGISTER">
				</form>
			</div>
		</div>

	</div>
</body>
</html>