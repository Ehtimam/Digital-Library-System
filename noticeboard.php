<?php


include('db.php');

if (isset($_POST['add'])) {
    $text = $_POST['text'];
    $ii = $_POST['i'];
    
    $sql = "INSERT INTO `notify` (`i`,`notice`) VALUES ('$ii','$text')";
    $result = mysqli_query($db, $sql);
	
	if($result){
		echo "You have Succesfully Registerd.";
	} else {
		echo "Oops! Something went wrong.";
	}
}

if (isset($_POST['reset'])) {
                    
    $ii = $_POST['i'];

    $sql =  "DELETE FROM notify where i='1'";
    
    
    $result = mysqli_query($db, $sql);

    if($result){
        echo "You have Succesfully inserted.";
    } else {
        echo "Oops! Something went wrong.";
    }
}          

?>

<?php
/*
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
*/
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <style>
            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
                font-size: 16px;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            
            body {
                background-color: #eef3ec;
            }
            
            h1 {
                text-align: center;
                color: #0b121d;
                font-size: 24px;
                padding: 20px 0 20px 0;
                border-bottom: 1px solid #131210;
            }
            
            h5 {
                text-align: left;
                color: #0b121d;
                font-size: 20px;
                border-bottom: 1px solid #131210;
            }
            #content{
              height: 1000px;
            }
            table,th,td {
	          	font-size:15px;
	          }
            #mySidebar{
              width: 300px;
              background-color: #eef3ec;
              
              

            }
            h3{
            text-align: center;
        }
        
        #ii{
           width:600px;
        }
        #bord{
           padding-left: 100px;
           width: 600px;
           height: 100px;
          
        }
        #ss{
            padding-left: 650px;
        }
        #bb{
            padding-right: 50px;
        }
       
            
        </style>


    </head>

    <body>

    
        <h1>Digital library</h1>
        
        <div class="search" align="right">
            <form>
                <input type="text" name="search" id="search" placeholder="search">
                <input type="submit" value="Go" id="go">

            </form>
        </div>
        <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
        
        <table>
					<tr>
						<td><i class="fas fa-user"></i>:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td><i class='fas fa-envelope-square'></i>:</td>
						<td><?=$email?></td>
					</tr>
					<tr>
						<td><i class='fas fa-mobile-alt'></i>:</td>
						<td><?=$phone?></td>
					</tr>
				</table>
              <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
        </div>

        <div class="tab">
            <ul class="nav nav-tabs">
          
              
            <li class="active"><a class="w3-button w3-teal w3-xlarge" onclick="w3_open()" href='Admin.php'>☰</a></li>
          




                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Book
              <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a id="page1link" href="#">Add Book</a></li>
                        <li><a id="page1link1" href="Updatebook.php">Update Books</a></li>
                    </ul>


                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Worker
              <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a id="page2link" href="#">Add Worker</a></li>
                            <li><a id="page2link1" href='Update_worker.php'>Update worker</a></li>
                        </ul>


                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Member
              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a id="page3link" href="#">Add member</a></li>
                                <li><a id="page3link1" href='Update_mem.php'>Update member</a></li>
                            </ul>


                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notification
              <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Notice Forum</a></li>
                                    <li><a href="#">Member Applicance</a></li>
                                    <li><a href="#">CV </a></li>
                                </ul>

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Donations
              <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Total Donation</a></li>
                                        <li><a href="#">Donar List</a></li>
                                    </ul>
                                    
                                    <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Admin Accounts
              <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="registration.html">Create Admin</a></li>
                                        <li><a href="admin_accounts.php">Admin List and Update</a></li>
                                        <li><a href="user_accounts.php">Users List</a></li>
                                    </ul>    

                                    <li><a href='loggout.php'>Exit</a></li>
            </ul>

        </div>
             
        <div id="content" onclick="w3_close()">


    <div class="info">
        <h3> Notification forum </h3>
       <form action="" method="POST">

       <div id="ss">
                    <label for="ii">Index:</label>
                    <input type="number" class="form-control" id="ii" name="i" value="1">
                   

               
                    <label for="bord">Notification:</label>
                    <input type="text" class="form-control" id="bord" name="text" placeholder="Write here">
    </div>            

                
        



          
            <div align="center" id="bb">
            <input type="submit" name="reset" value="Reset">
            <input type="submit" name="add" value="Send">
            

            </div>

            
         </form>
    </div>
</body>

</html>