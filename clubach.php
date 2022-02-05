<?php
error_reporting(0);

	 $con = mysqli_connect("localhost","root","","clubach");
	 if(mysqli_connect_error()){
		 die("error");
	 }
	 else{
	if(isset($_POST['srujana'])){
	 $sql="select * from srujana order by id desc";
	 $result=mysqli_query($con,$sql);
	}
	if(isset($_POST['chaaya'])){
	 $sql="select * from chaaya order by id desc";
	 $result=mysqli_query($con,$sql);
	}
	if(isset($_POST['lasya'])){
	 $sql="select * from lasya order by id desc";
	 $result=mysqli_query($con,$sql);
	}
	if(isset($_POST['geethi'])){
	 $sql="select * from geethi order by id desc";
	 $result=mysqli_query($con,$sql);
	}
	if(isset($_POST['kreeda'])){
	 $sql="select * from kreeda order by id desc";
	 $result=mysqli_query($con,$sql);
	}
	if(isset($_POST['commu'])){
	 $sql="select * from commu order by id desc";
	 $result=mysqli_query($con,$sql);
	}
	
	 }
?>



<html>
<head>
<title>Club Achievements</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="clubstyle.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="js/timeline.min.js"></script>
<link rel="stylesheet" href="css/timeline.min.css"/>


<style>
	::-webkit-scrollbar {
  width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background:rgba(51,85,40,0.7); 
  border-radius: 10px;
}
.panel-body{

	overflow:auto;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	
}
.timeline__content{
	background-color:rgba(51,85,40,0.3);
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>



</head>
<body>
 
<div class="container">
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
                    <h3 class="panel-title">Latest Updates</h3>
                </div>
                <div class="panel-body">
                 <div class="timeline">
                  <div class="timeline__wrap">
                   <div class="timeline__items">
                   <?php 
                   while($row=mysqli_fetch_assoc($result))
                   {
                   ?>
                    <div class="timeline__item">
                     <div class="timeline__content">
					  <h2><?php echo $row['description'];; ?></h2>
					    <img src="<?php echo $row['image'];?>" >
                     </div>
                    </div>
                   <?php
                   }
                   ?>
                   </div>
                  </div>
                 </div>
                </div>
   </div>
  </div>


<script>
$(document).ready(function(){
 jQuery('.timeline').timeline({
  //mode: 'horizontal',
  //visibleItems: 4
  //Remove this comment for see Timeline in Horizontal Format otherwise it will display in Vertical Direction Timeline
 });
});
</script>
</body>
</html>