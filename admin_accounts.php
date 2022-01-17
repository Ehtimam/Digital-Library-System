<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.o">
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
            #cont{
                padding-right: 100px;

            }
            #san{
                padding-left: 650px;
            }
            #serch{
               padding-left: 600px;
            }
        </style>





    <title>Digital library</title>
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

                              <li><a href="donerlist.php">Donar List</a></li>

                              </ul>
                              <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Users
        <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="registration.html">Create Admin</a></li>
                                  <li><a href="#">Admin List and Update</a></li>
                                  <li><a href="user_accounts.php">Users List</a></li>
                              </ul>    


                              <li><a href='loggout.php'>Exit</a></li>
            </ul>

        </div>

<div id="content" onclick="w3_close()">
<h4 align='center'>Admin List </h4>
            
                
            <div class="row">
                <div class="col-md-7" id="san" >

                    <form action="" method="POSt">
                        <div class="input-group mb-3" align="center">
                            <input type="text" name="search"  value="<?php if(isset($_POST['search'])){echo $_POST['search']; } ?>" class="form-control" placeholder="Search data">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>

                </div>
            </div>

<div class="col-md-12">
            <form action="" method="POST">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Password</th>
                        
                </thead>
                <tbody>
                    <?php 
                        include('db.php');

                        if(isset($_POST['search']))
                        {
                            $filtervalues = $_POST['search'];
                            $query = "SELECT * FROM reg WHERE CONCAT(name,email,phone) LIKE '%$filtervalues%' ";
                            $sql = "SELECT * FROM reg";
                            $query_run = mysqli_query($con, $sql);
                            $query_jump = mysqli_query($con, $query);

                          if(empty($query_jump)){

                            if((mysqli_num_rows($query_run) > 0) )
                            {   
                               

                                
                                foreach($query_run as $items)
                                {
                                    ?>
                                    <tr>
                                        <td><input type="text" name="i" value="<?= $items['name']; ?>" /></td>
                                      
                                        <td><input type="text" name="email" value="<?= $items['email']; ?>" /></td>
                                        <td><input type="text" name="phone" value="<?= $items['phone']; ?>" /></td>
                                        <td><input type="password" name="pass" value="<?= $items['pass']; ?>" /></td>
                                        
                                        
                                        
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
                          
                         }
                         else{
                            if((mysqli_num_rows($query_jump) > 0) )
                            {   
                               

                                
                                foreach($query_jump as $items)
                                {
                                    ?>
                                    <tr>
                                        <td><input type="text" name="i" value="<?= $items['name']; ?>" /></td>
                                      
                                        <td><input type="text" name="email" value="<?= $items['email']; ?>" /></td>
                                        <td><input type="text" name="phone" value="<?= $items['phone']; ?>" /></td>
                                         <td><input type="password" name="pass" value="<?= $items['pass']; ?>" /></td>
                                        
                                        
                                        
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
                         }
                        }
                    
                        
                        if (isset($_POST['ok'])) {
                            $name= $_POST['i'];
                            $email = $_POST['email'];    
                            $phone = $_POST['phone'];
                            $pass = $_POST['pass'];
                            
                                                    
                            $sql = "UPDATE reg SET name='$name', email='$email', phone='$phone',pass='$pass' WHERE name='$name'" ;
                                            
                            $result = mysqli_query($con, $sql);
                                if($result){
                                        echo "You have Succesfully inserted.";
                                    } else {
                                        echo "Oops! Something went wrong.";
                                    }
                                 
                                    
                            }
                            if (isset($_POST['cancel'])) {
                    
                                $name = $_POST['i'];
                                $sql =  "DELETE FROM reg WHERE name='$name'";
                                
                                
                                $result = mysqli_query($con, $sql);
                            
                                if($result){
                                    echo "You have Succesfully inserted.";
                                } else {
                                    echo "Oops! Something went wrong.";
                                }
                            } 
                  
                       
                    ?>
                </tbody>
            </table>
            <div align="center" id=sub >
            <input type="submit" name="cancel" value="Delete" >
            <input type="submit" name="ok" value="Update" >
     </div>
            

</form>
</div>
    

</div>    

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>