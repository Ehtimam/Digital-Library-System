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

$stmt = $db->prepare('SELECT pass, email, phone FROM reg WHERE name = ?');
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    </style>
</head>

<body>

    <h1>Digital library</h1>
    <h5>Welcome User <?=$_SESSION['name']?></h5>
    <div class="search" align="right">
        <form>
            <input type="text" name="search" id="search" placeholder="search">
            <input type="submit" value="Go" id="go">

        </form>
    </div>
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
    <div class="tab">
        <ul class="nav nav-tabs">
            <li class="active"><a id="page1Link" href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a id="page2Link" href="membership.html">Become a member</a></li>
            <li><a href="#">Read a book</a></li>
            <li><a href="#">Apply for book</a></li>
            <li><a href="#">Donate</a></li>
            <li><a href="#">Notification</a></li>
            <li><a href="#">Complain box</a></li>
            <li><a href='loggout.php'>Exit</a></li>
        </ul>
        <div>
            <!-- page 2 message colored in blue -->
            <!-- in the beginning page2 is not visible (display set to 'none')-->
            <p id="page2" style="font-size:40px;color:blue;display:none"></p>

        </div>
        <div>
            <!-- page 1 message colored in red -->
            <p id="page1" style="font-size:20px;color:rgb(0, 0, 0)">This is Digital Library. A multifuctional webpage that helps you <br> learn more about this library and its collection.<br> You need to Become a library member in order to use this library.<br> Becomeing a member will help you in a lot of
                ways. First you can borrow any kinds of book you want.<br> There are certain books that are authorized be library so with out a certain degree of membership you cannot access those book.<br> Also you can apply for a book that is currenty
                in the hand of an another member. Your applicance will be registerd.<br>
                <h3> How to become a member: <br> 1. Head to the become a member site.<br> 2. Fillout the form with valid information.<br> 3. Enter a picture of your in the photo area.<br> 4. Finally wait for an confirmation email.<br>
                </h3>
                Thanks for being with us and also please kindly donate money monthly 5 taka as a membership right.


            </p>
        </div>


    </div>

</body>

<script>
    // use $(document).ready function to
    // make sure that the code executes only after the document's
    // DOM has been loaded into the browser.
    $(document).ready(function() {
        // when page1Link link is clicked, page1 shows,
        // page2 hides
        $(page1Link).bind("click", function() {
            $(page1).show();
            $(page2).hide();
        });

        // when page2Link link is clicked, page2 shows,
        // page1 hides
        $(page2Link).bind("click", function() {
            $(page1).hide();
            $(page2).show();
        });
    });
</script>

</html>