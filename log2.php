<?php
session_start();

$db = mysqli_connect('localhost','root','','eht');
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['uname'], $_POST['pass']) ) {
	exit('Please fill both the username and password fields!');
}

if ($stmt = $db->prepare('SELECT pass FROM reg WHERE name = ?')) {
	$stmt->bind_param('s', $_POST['uname']);
	$stmt->execute();
	$stmt->store_result();
	
	if ($stmt->num_rows > 0) {
	$stmt->bind_result($pass);
	$stmt->fetch();
	if ($_POST['pass'] === $pass) {
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['uname'];
		
		header('Location: Member_mainpage.php');
	} else {
		echo 'Incorrect username and/or password!';
	}
} else {
	echo 'Incorrect username and/or password!';
}	

	$stmt->close();
}
?>