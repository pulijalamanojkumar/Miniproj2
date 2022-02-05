				<?php


session_start();

$conn = "";
  
try {
    $servername = "localhost";
    $dbname = "login";
    $username = "root";
    $password = "";
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=login",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if (isset($_POST['login'])) {
     
    $adminname = test_input($_POST["user"]);
    $password = test_input($_POST["pass"]);
    $stmt = $conn->prepare("SELECT * FROM login");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['username'] == $adminname) &&
            ($user['password'] == $password)) {
					$_SESSION['ID']=5;
				    header("Location:nssadmin.php");
				
			}
    }
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
      
	
}

?>







































<?php

/*session_start();
 $_SESSION['ID']=0;
 
$conn = "";
  
try {
    $servername = "localhost";
    $dbname = "login";
    $username = "root";
    $password = "";
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=login",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"]== "POST") {
     
    $adminname = test_input($_POST["user"]);
    $password = test_input($_POST["pass"]);
    $stmt = $conn->prepare("SELECT * FROM login");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['username'] == $adminname) &&
            ($user['password'] == $password)) {
				 $_SESSION['ID']=5;
				 if(isset($_POST['login']))
				    header("Location:kreedaadmin.php");
				exit();
			}
			
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}*/
?>
