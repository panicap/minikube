<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PANICAP222222222222222222222</title>

<style>

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.logoutbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

</style>
</head>

<body>

	
	<center>
	<img src="images/logo_kube.png" alt="logokube" class="center">
	<h1>Hello, <?php echo $user_data['user_name']; ?></h1><br>
	<h2>WELCOME TO KUBERNETES</h2><br><br>
	<button type="button" class="logoutbtn"><h3><a href="logout.php">Logout</a><h3></button>
	</center>
	

  
</body>
</html>
