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
                            <li><a id="page2link1" href="Update_worker.php">Update worker</a></li>
                        </ul>


                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Member
              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a id="page3link" href="#">Add member</a></li>
                                <li><a id="page3link1" href="Update_mem.php">Update member</a></li>
                            </ul>


                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notification
              <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="noticeboard.php">Notice Forum</a></li>
                                    <li><a href="#">Member Request</a></li>
                                    
                                </ul>

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Donations
              <span class="caret"></span></a>
                                    <ul class="dropdown-menu">

                                    <li><a href="">Donar List</a></li>

                                    </ul>
                                    <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Users
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

                     <h4 align='center'>Doner list </h4>
            
                
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
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>CARD</th>
                                    <th>AMOUNT</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include('db.php');

                                    if(isset($_POST['search']))
                                    {
                                        
                                       
                                        $sql = "SELECT * FROM donar";

                                        $query =  "SELECT money FROM donar";

                                        $query_run = mysqli_query($con, $sql);

                                        $result = mysqli_query($con, $query);

                                        
                                        
                                        
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><input type="number" name="ind" value="<?= $items['id']; ?>" /></td>
                                                    <td><input type="text" name="id" value="<?= $items['doner']; ?>" /></td>
                                                    <td><input type="number" name="book" value="<?= $items['card']; ?>" /></td>
                                                    <td><input type="number" name="writer" value="<?= $items['money']; ?>" /></td>
                                                    
                                                    
                                                    
                                                    
                                                </tr>
                                                <?php
                                            }
                                            
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }

                                        
                                        /*if($result && mysqli_num_rows($result) > 0)
                                        {
                                            $totalmoney = 0;

                                        while($row = mysqli_fetch_row($result))
                                        {   
                                            $money = $row['money'];

                                            $totalmoney += $money;

                                            echo " Money = " .$money. "<br/>";
                                            print_r($row);
                                        }

                                        echo "Totalmoney = " .$money. "<br/>";
                                    
                                        mysqli_free_result($result);
                                        }
                                        else
                                        {
                                            echo mysqli_error($connect);
                                        }*/
                                       
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