<?php

session_start();

if (!isset($_SESSION['loggedin'])) {

	header('Location: index2.html');
	exit;
}
$db = mysqli_connect('localhost', 'root', '', 'eht');
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $db->prepare('SELECT pass, email, phone FROM user WHERE name = ?');
$stmt->bind_param('s', $_SESSION['name']);
$stmt->execute();
$stmt->bind_result($pass, $email, $phone);
$stmt->fetch();
$stmt->close();





?>


<html>


<head>

    <title> Digital Library</title>
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
            font-size: 10px;
           
            border-bottom: 1px solid #131210;
        }
        table,th,td {
	          	font-size:15px;
	          }
        #content{
              height: 1000px;
            }
        #mySidebar{
              width: 300px;
              background-color: #eef3ec;
              
              

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

       
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="icon/library.jpg" style="width: 100vw; height: 300px;" alt="Digital Library">
            </div>

            <div class="item">
                <img src="icon/NEUB.jpg" style="width: 100vw; height: 300px;" alt="NEUB">
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
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
            <!--<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>-->
              
                <li class="active"><a class="w3-button w3-teal w3-xlarge" onclick="w3_open()" href="#">☰</a></li>
            
                
                <li class="active"><a id="page1Link" href="#">Home</a></li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Membership
              <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a id="page2link" href="#">Instruction</a></li>
                            <li><a id="page2Link" href="membership.html">Become a member</a></li>
                        </ul>


                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Books
              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a id="page3link" href="searchbooks.php">Search Books</a></li>
                                <li><a href="readbooks.php">Read a book</a></li>
                            </ul>


                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notification
              <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a id="page4link" href="#">Notice Forum</a></li>
                                    <li><a href="user_request.php">Request box</a></li>
                                    
                                </ul>

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Donations
              <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="user_doner.php"> Donation</a></li>
                                        
                                    </ul>
                                    
                                <li class="dropdown">    
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Update AC
              <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                    <li><a id="page5link" href="#">Account</a></li>
                                    </ul>    

                                <li><a href='loggout.php'>Exit</a></li>
            </ul>

        </div>
        <div id="content" onclick="w3_close()">

        </div>

       



        </div>
        


    </div>

</body>

<script>
    // use $(document).ready function to
    // make sure that the code executes only after the document's
    // DOM has been loaded into the browser.
    $(document).ready(function() {
        $(page2link).bind("click", function() {
          $("#content").load("instruction.html");
        });
        $(page4link).bind("click", function() {
          $("#content").load("user_view_notice.php");
        });
        $(page5link).bind("click", function() {
          $("#content").load("update_user_account.php");
        });
     
          
  });
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
}


</script>

</html>