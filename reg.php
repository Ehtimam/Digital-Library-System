<?php
 




	$db = mysqli_connect('localhost','root','','eht');
	
	
	
	$name = $_POST['uname'];
	$email = $_POST['uemail'];
	$phone = $_POST['mobile'];
	$pass = $_POST['pass'];
	
	$sql = "INSERT INTO `reg` (`name`, `email`, `phone`, `pass`) VALUES ('$name', '$email', '$phone', '$pass')";
	
	$result = mysqli_query($db, $sql);
	
	if($result){
		echo "You have Succesfully Registerd.";
	} else {
		echo "Oops! Something went wrong.";
	}
	
?>

<html> 
	<title> Thank You </title>
	<header> Thank You
	<style> body{background-color:cornsilk;
	padding-top: 50px;}</style>
	</header>

<body align=center> 
	
	<a href="login.html"><i class="fas fa-sign-out-alt"></i>Login</a>
</body>	
</html>


	