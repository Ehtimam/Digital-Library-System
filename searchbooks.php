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
            <li><a id="page3link" href="#">Search Books</a></li>
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

                     <h4 align='center'>Search book info </h4>
            
                
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="POSt">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" value="<?php if(isset($_POST['search'])){echo $_POST['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>

            <div class="col-md-12">
                        <form>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>INDEX</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Writer</th>
                                    <th>Publisher</th>
                                    <th>Release</th>
                                    <th>Page</th>
                                    <th>Language</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect('localhost', 'root', '', 'eht');

                                    if(isset($_POST['search']))
                                    {
                                        $filtervalues = $_POST['search'];
                                        $query = "SELECT * FROM book WHERE CONCAT(ind,id,name,writer,publisher,date,page,language) LIKE '%$filtervalues%' ";
                                       
                                        $sql = $sql = "SELECT * FROM book";

                                        $query_run = mysqli_query($con, $sql);

                                        $query_jump = mysqli_query($con, $query);

                                        if(empty($query_jump)){
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><input type="number" name="ind" value="<?= $items['ind']; ?>" /></td>
                                                    <td><input type="number" name="id" value="<?= $items['id']; ?>" /></td>
                                                    <td><input type="text" name="book" value="<?= $items['name']; ?>" /></td>
                                                    <td><input type="text" name="writer" value="<?= $items['writer']; ?>" /></td>
                                                    <td><input type="text" name="publisher" value="<?= $items['publisher']; ?>" /></td>
                                                    <td><input type="text" name="release" value="<?= $items['date']; ?>" /></td>
                                                    <td><input type="number" name="page" value="<?= $items['page']; ?>" /></td>
                                                    <td><input type="text" name="language" value="<?= $items['language']; ?>" /></td>
                                                    
                                                    
                                                    
                                                </tr>
                                                <?php
                                            }
                                            
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="7">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                        else{
                                            if(mysqli_num_rows($query_jump) > 0)
                                        {
                                            foreach($query_jump as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><input type="number" name="ind" value="<?= $items['ind']; ?>" /></td>
                                                    <td><input type="number" name="id" value="<?= $items['id']; ?>" /></td>
                                                    <td><input type="text" name="book" value="<?= $items['name']; ?>" /></td>
                                                    <td><input type="text" name="writer" value="<?= $items['writer']; ?>" /></td>
                                                    <td><input type="text" name="publisher" value="<?= $items['publisher']; ?>" /></td>
                                                    <td><input type="text" name="release" value="<?= $items['date']; ?>" /></td>
                                                    <td><input type="number" name="page" value="<?= $items['page']; ?>" /></td>
                                                    <td><input type="text" name="language" value="<?= $items['language']; ?>" /></td>
                                                    
                                                    
                                                    
                                                </tr>
                                                <?php
                                            }
                                            
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="7">No Record Found</td>
                                                </tr>
                                            <?php
                                        }

                                        }
                                    }
                                   
                                ?>
                            </tbody>
                        </table>
                        

            </form>
        </div>
                
    
</div>    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>