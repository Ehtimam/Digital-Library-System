<?php


include('db.php');

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $card = $_POST['num'];
    $date = $_POST['date'];
    $money = $_POST['money'];
    
    $sql = "INSERT INTO `donar` (`doner`,`card`,`date`,`money`) VALUES ('$name','$card','$date','$money')";
    $result = mysqli_query($db, $sql);
	
	if($result){
		echo "You have Succesfully Registerd.";
	} else {
		echo "Oops! Something went wrong.";
	}
}


         

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
            h3{
            text-align: center;
        }
        
        #ii{
           width:600px;
        }
        #bord{
           padding-left: 100px;
           width: 600px;
           
          
        }
        #bordar{
            width:600px;
        }
        #bo{
            width:600px;
        }
        #ss{
            padding-right: 650px;
        }
        #bb{
            padding-right: 50px;
        }
        label{
            padding-right: 500px;
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
              
                <li class="active"><a class="w3-button w3-teal w3-xlarge" onclick="w3_open()" href="Member_mainpage.php">☰</a></li>
            
                
                <li class="active"><a id="page1Link" href="Member_mainpage.php">Home</a></li>

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
                    <li><a href="#"> Donation</a></li>
                    
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
        <div class="info">
        <h3> Donation </h3>
       <form action="" method="POST">

       <div id="ss">
                    
                    <label for="bord">Name</label>
                    <input type="text" class="form-control" id="bord" name="name" placeholder="Put your name">

                    <label for="ii">Credit Card</label>
                    <input type="number" class="form-control" id="ii" name="num" placeholder="Give the card number">
    
                    <label for="bordar">valid time</label>
                    <input type="text" class="form-control" id="bordar" name="date" placeholder="Card valid time">

                    <label for="bo">Amount of money</label>
                    <input type="number" class="form-control" id="bo" name="money" placeholder="Please put a valid amount">


    </div>            

                
        



          
            <div align="center" id="bb">
        
            <input type="submit" name="add" value="Send">
            

            </div>

            
         </form>
    </div>
</body>

</html>