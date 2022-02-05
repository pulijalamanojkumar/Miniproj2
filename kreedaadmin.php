<?php
include 'loginauthkreeda.php';
if($_SESSION['ID']!=5){
	  header("Location:index.php");
}
else{
	echo "";
}


if(isset($_POST['logout'])){
	session_destroy();
	header("Location:admin.php");
}
?>


<?php
if(isset($_POST['imgupload'])){
 $con = mysqli_connect("localhost","root","","image");
 $file=$_FILES['image']['name'];
 $sql = "insert into kreedaimg(image) values ('$file')";
 $res=mysqli_query($con,$sql);
if($res){
move_uploaded_file($_FILES['image']['tmp_name'],"$file");
echo "<script language='javascript'>";
            echo "alert('Image uploaded successfully')";
            echo "</script>";
}else{
	echo "there was a problem ";
}	
}


if(isset($_POST['deleteimg'])){
	 $con = mysqli_connect("localhost","root","","image");
	 if(mysqli_connect_error()){
		 die("error");
	 }
	else{
		$sql="delete from chaayaimg where id in (select min(id) from chaayaimg)";
		$stmt=$con->prepare($sql);
		$stmt->execute();
		 	 echo "<script language='javascript'>";
            echo "alert('Sucessfully Deleted')";
            echo "</script>";
	}
}

?>



<!DOCTYPE html>
<html>
<head>
<title>KreedaAdmin</title>
<link rel="stylesheet" href="clubstyle.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="C:/Users/dell/Desktop/miniproject/hello.js"></script>
  <style>
  
table{
			
	border-collapse:collapse;
	width:30%;
	font-size:15px;
	text-align:center;
	position:absolute;
	top:25%;
	left:2%;
}
th{
	background-color:lightblue;
	color:black;
	border-radius:10px;
	text-align:center;
}
h1{
	font-family:Timesnewroman;

	position:absolute;
	top:12%;
	left:8%;
}

.uploadform{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

	border-radius:10px;
	padding:10px;
	text-align:center;
	background-color:lightblue;
	position:absolute;
	top:25%;
	left:35%;
}
#uploadbtn{
	background-color:white;
	border-radius:5px;
	padding:10px;
}
#uploadbtn:hover{
	  background: linear-gradient(to left, lightblue 50%, lightgreen 50%);
  background-size: 200% 100%;
  background-position: right bottom;
  transition: all .5s ease-out;
}


#logout{

	color:white;
	font-size:120%;
	position:absolute;
	top:25%;
	left:90%;
	padding:5px;
border-style:hidden;
background-color:rgb(51,85,40);	
border-radius:5px;
}

#logout:hover{
	color:black;
	background: #E0EAFC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #CFDEF3, #E0EAFC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
text-decoration: none;
}


.updatebox{
	border-radius:10px;
	background-color:lightblue;
	padding:20px;
	position:absolute;
	top:25%;
	left:58%;
	width:30%;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	
}

  </style>
  
</head>
<body>
<header>
<div class="topmostbar">
<form action="" method="POST">
<input id="logout" type="submit" name="logout" value="SignOut"/>
</form>
<a href="index.php">
<img src="logos/clubhublogo.png">
</a>
</div>

</header>
<h1>Registrations</h1>
<table>
<tr>
<th>Fullname</th>
<th>Email</th>
<th>Phone number</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","registrations");
if($conn->connect_error){
	die("Database connection failed".$conn->connect_error());
}
$sql="select fullname,email,phone from kreeda";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
		echo "<tr><td>".$row['fullname']."</td><td>".$row['email']."</td><td>".$row['phone']."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "No registrations ";
}
$conn->close();
?>
</table>

<div class="uploadform">
<form  method="POST" enctype="multipart/form-data">
<label id="uploadimglabel" >Upload Images Here</label>
<input  type="file" name="image"><br>
   <input id="uploadbtn" type="submit" name="imgupload" value="Upload">
   <br><br>
<input id="deleteimg" type="submit" name="deleteimg" value="Delete a Img"/>
</form>
</div>

<div class="updatebox">
    <form name='updateboxform' method="POST">
	<label>Update Text</label>
      <textarea name='desc' rows="5" style="width:200px;"></textarea>
	  <br>
	  <br>
	  <label>Related links</label>
	  <input  type='text' name='links'>
	  <br>
	  <br>
    <input id="uploadbtn" type='submit' name='uploadbox' value='Update'>
	<br>
	<br>
	<input id="deleteupdate" type="submit" name="deleteupdate" value="Delete a Update"/>
    </form>
  </div>

<div class="updatebox" style="position:absolute;top:62%;left:35%;">
<?php
if(isset($_POST['uploadach'])){
	$desc=$_POST['desc'];
 $con = mysqli_connect("localhost","root","","clubach");
 $file=$_FILES['image']['name'];
 $sql = "insert into kreeda(description,image) values ('$desc','$file')";
 $res=mysqli_query($con,$sql);
if($res){
move_uploaded_file($_FILES['image']['tmp_name'],"$file");
echo "<script language='javascript'>";
            echo "alert('Uploaded Successfully')";
            echo "</script>";
}else{
	echo "there was a problem ";
}
	
}
?>
    <form name='achform' method="POST" enctype="multipart/form-data">
	<label>Upload related image</label>
	<input  type="file" name="image">
	  <br>
	<label>Enter achievement</label>
       <textarea name='desc' rows="3" style="width:338px;"></textarea>
	  <br>
    <input id="uploadbtn" type='submit' name='uploadach' value='Update'>
	<br>
	<br>
	<input id="deleteach" type="submit" name="deleteach" value="Delete a Update"/>
    </form>
  </div>


</body>
</html>


<?php
error_reporting(0);
$desc=$_POST['desc'];
$links=$_POST['links'];
if(isset($_POST['uploadbox'])&&($_POST['desc']!=NULL)){
	 $con = mysqli_connect("localhost","root","","updatebox");
	 if(mysqli_connect_error()){
		 die("error");
	 }
	 else{
	 $sql="insert into kreeda(description,links) values('$desc','$links')";
	 $stmt=$con->prepare($sql);
	 $stmt->execute();
	 	 echo "<script language='javascript'>";
            echo "alert('INFORMATION UPDATED')";
            echo "</script>";
	 }
}



if(isset($_POST['deleteupdate'])){
	
	 $con = mysqli_connect("localhost","root","","updatebox");
	 if(mysqli_connect_error()){
		 die("error");
	 }
	 else{
	 $sql="delete from kreeda where id in (select min(id) from kreeda)";
	 $stmt=$con->prepare($sql);
	 $stmt->execute();
	 	 echo "<script language='javascript'>";
            echo "alert('DELETED')";
            echo "</script>";
	 }
}
?>







<?php

/*
$msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['imgupload'])) {
  
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];    
        $folder = "kreedaimg/".$filename;
          
    $db = mysqli_connect("sql108.epizy.com", "epiz_28286599", "RicvdYNJX9o", "epiz_28286599_image");
   
        // Get all the submitted data from the form
        $sql = "INSERT INTO kreedaimg(image) VALUES ('$filename')";
  
        // Execute query
        mysqli_query($db, $sql);
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file("$tempname", "$folder"))  {
            echo "<script language='javascript'>";
            echo "alert('Image uploaded successfully')";
            echo "</script>";
        }else{
            $msg = "Failed to upload image";
      }
  }

  */
  ?>