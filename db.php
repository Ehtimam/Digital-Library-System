<?php

$db = mysqli_connect('localhost','root','','eht');
$con = mysqli_connect('localhost','root','','eht');

if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>