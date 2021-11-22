<center><?php
$db = mysqli_connect('localhost', 'root', '', 'eht');
 
if(mysqli_connect_errno()){
exit("Failed to connect with MySQL: ".mysqli_connect_error());
}
$sql = "SELECT * FROM reg";
$result = mysqli_query($db, $sql);

while($user = mysqli_fetch_array($result)) {
$name = $user['name'];
$email = $user['email'];
$pass = $user['pass'];
$phone = $user['phone'];
echo "Name: ". $name."<br>". "Email: ". $email."<br>". "Phone No: ".$phone. "<br>"."<br>" ;
}
?></center>
