<?php
include 'loginauthlasya.php';
?>



<!DOCTYPE html>
<html>
<head>
<title>LasyaAdmin</title>
<link rel="stylesheet" href="clubstyle.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="C:/Users/dell/Desktop/miniproject/hello.js"></script>
</head>
<body>
<header>
<div class="topmostbar">
<a href="index.php">
<img src="logos/clubhublogo.png">
</a>
</div>
</header>
<div class="container">
  <div class="hover-box">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <a class="dedcription-btn" href="kreedalogin.php">
          <span class="name-descripeion">Kreeda Login</span>
        <div class="btn-icon">
          <i class="far fa-lightbulb"></i>              </div>
        </a>
      </div>
      <div class="col-sm-12 col-md-6">
        <a class="dedcription-btn" href="geethilogin.php">
          <span class="name-descripeion">Geethi Login</span>
        <div class="btn-icon heart">
          <i class="fas fa-heartbeat"></i>
        </div>
      </a>
   </div>
   <div class="col-sm-12 col-md-6">
     <a class="dedcription-btn" href="lasyalogin.php">
       <span class="name-descripeion">Laasya Login</span>
   <div class="btn-icon book">
     <i class="fas fa-book-reader"></i>          </div>
  </a>
 </div>
 <div class="col-sm-12 col-md-6">
   <a class="dedcription-btn" href="srujanalogin.php">
     <span class="name-descripeion">Srujana Login</span>
     <div class="btn-icon brain">
       <i class="fas fa-brain"></i>           </div>
   </a>
      </div>
	   <div class="col-sm-12 col-md-6">
        <a class="dedcription-btn" href="chaayalogin.php">
          <span class="name-descripeion">Chaaya Login</span>
        <div class="btn-icon">
          <i class="far fa-lightbulb"></i>              </div>
        </a>
      </div>
	   <div class="col-sm-12 col-md-6">
        <a class="dedcription-btn" href="commulogin.php">
          <span class="name-descripeion">Communicando Login</span>
        <div class="btn-icon">
          <i class="far fa-lightbulb"></i>              </div>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="formDiv">
        <h1 class="title">Lasya Login</h1>
        <form action="lasyalogin.php" method="POST">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="user">
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="pass">
            </div>
            <button type="submit" name="login" class="btn">Log In</button>
          
        </form>
    </div>
</body>
</html>
