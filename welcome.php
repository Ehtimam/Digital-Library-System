
<?php

session_start();

if (!isset($_SESSION['loggedin'])) {

	header('Location: index.html');
	exit;
}
$db = mysqli_connect('localhost', 'root', '', 'eht');
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $db->prepare('SELECT pass, email, phone FROM reg WHERE name = ?');
$stmt->bind_param('s', $_SESSION['name']);
$stmt->execute();
$stmt->bind_result($pass, $email, $phone);
$stmt->fetch();
$stmt->close();
?>



<html>
	<head>
		
		<title>Home Page</title>
		<style>
			table,th,td {
		border:1px solid black;
		
	}
	body{background-color:cornsilk}
	</style>
		
	</head>
	<body align=center >
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
			
			<h2>Profile Page</h2>
			 <p>Your account details are below:</p>
				<table align=center>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
					<tr>
						<td>Phone:</td>
						<td><?=$phone?></td>
					</tr>
				</table>
			<a href="loggout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			<h2>Check Users</h2>
			<a href="users.php"><i class="fas fa-sign-out-alt"></i>Users</a>
	</body>
</html>