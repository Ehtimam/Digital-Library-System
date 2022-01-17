<?php

session_start();
$db = mysqli_connect('localhost','root','','eht');
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if (isset($_POST['ok'])) {
    $name = $_POST['uname'];
	$age = $_POST['uage'];
	$gender = $_POST['gen'];
	$dobirth = $_POST['udob'];
    $address = $_POST['uadd'];
    $email = $_POST['uemail'];
    $mobile = $_POST['uphone'];
	$nid = $_POST['unid'];

	$sql = "INSERT INTO `worker` (`name`, `address`, `email`, `phone`, `age`, `nid`,`gender`,`dob`) VALUES ('$name', '$address', '$email', '$mobile','$age','$nid','$gender','$dobirth')";
	
	$result = mysqli_query($db, $sql);

    if($result){
		echo "You have Succesfully inserted.";
	} else {
		echo "Oops! Something went wrong.";
	}
}

?>






<html>
<title>Add Worker</title>
	<head>
		
	  <h3 align="center"> New Worker </h3>
	  
	 
	
	

	<style>
    
	#worker{
		background-color: antiquewhite;
	}
    
	#pwd{width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 80px;}
	#sub{
		padding-top: 25px ;
	}

</style>
	
	</head>


<body> 
   <div id="worker">

	
    <form name="myform"  method = "POST" action='Admin_Add_Worker.php'>
	<div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <label for="una">Name:</label>
                    <input type="text" class="form-control" id="una" name="uname" placeholder="Enter Name">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" id="age" name="uage">
                    <label for="gen">Gender</label>
                    <input type="text" class="form-control" id="gen" name="gen">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="udob">
                    

                </div>
                <div class="col-sm-6">
                    <label for="addr">Address:</label>
                    <input type="text" class="form-control" id="addr" name="uadd">
                    <label for="uem">Email:</label>
                    <input type="email" class="form-control" id="uem" name="uemail" placeholder="Enter Name">
                    <label for="phone">Mobile:</label>
                    <input type="number" class="form-control" id="phone" name="uphone">
                    <label for="nid">NID:</label>
                    <input type="number" class="form-control" id="nid" name="unid">

                </div>
            </div>
		
    
		<div align="center" id=sub >
				<input type="submit" name="ok" value="Ok" >
        		<input type="submit" name="cancel" value="Cancel" >
		</div>
	</form>
</div>

</body>
</html>
