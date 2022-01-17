<?php 
    session_start();
     $con = mysqli_connect('localhost', 'root', '', 'eht');

        if(isset($_POST['search']))
                {
                    $filtervalues = $_POST['search'];
                    $query = "SELECT * FROM book WHERE CONCAT(id,name,writer,publisher,date,page,languge) LIKE '%$filtervalues%' ";
                    $query_run = mysqli_query($con, $query);
                   if (!empty($$query_run) && $query_run !== true) {
                    return mysqli_num_rows($query_run);
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $items)
                            {    
                                  $id = $items['id'];
                                  $name = $items['name'];
                                  $writer = $items['writer'];   
                                  $publisher = $items['publisher'];   
                                  $date = $items['date'];   
                                  $page = $items['page'];   
                                  $language = $items['language'];   
                                  
                                     
                                                 
                            }
                    }
                    else
                        {
                            
                        }
                    }
                }
        if (isset($_POST['update'])) {

                $id1 = $_POST['id'];    
                $name1 = $_POST['book'];
                $writer1 = $_POST['writer'];   
                $publisher1 = $_POST['publisher'];   
                $date1 = $_POST['release'];   
                $page1 = $_POST['page'];   
                $language1 = $_POST['language'];
                
                    $sql = "UPDATE book SET name='$name1',writer='$writer1',publisher='$publisher1',date='$date1', page='$page1', language='$language1' WHERE id='$id1'" ;
                    
                    $result = mysqli_query($con, $sql);
                
                    if($result){
                        echo "You have Succesfully inserted.";
                    } else {
                        echo "Oops! Something went wrong.";
                    }
                }
               if (isset($_POST['del'])) {
                    
                    $id1 = $_POST['uid'];
                    $sql =  "DELETE FROM member WHERE id='$id1'";
                    
                    
                    $result = mysqli_query($con, $sql);
                
                    if($result){
                        echo "You have Succesfully inserted.";
                    } else {
                        echo "Oops! Something went wrong.";
                    }
                }         
                
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
            <!--<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>-->
              
                <li class="active"><a class="w3-button w3-teal w3-xlarge" onclick="w3_open()" href='Admin.php'>☰</a></li>
          




                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Book
              <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a id="page1link" href="#">Add Book</a></li>
                        <li><a id="page1link1" href="#">Update Books</a></li>
                    </ul>


                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Worker
              <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a id="page2link" href="#">Add Worker</a></li>
                            <li><a id="page2link1" href="#">Update worker</a></li>
                        </ul>


                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Member
              <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a id="page3link" href="#">Add member</a></li>
                                <li><a id="page3link1" href="#">Update member</a></li>
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
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Users
              <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">Users List</a></li>
                                    </ul>    


                                    <li><a href='loggout.php'>Exit</a></li>
            </ul>

        </div>
        <div id="content" onclick="w3_close()">
            
        <div id="worker">
        <h3 align="center"> Update Member info </h3>

<div class="search" align="right" id="ser">
         <form action='' method="POST">
         <input type="text" name="search" required value="<?php if(isset($_POST['search'])){echo $_POST['search']; } ?>"  placeholder="Search data">
         <button type="submit" >Search</button>

         </form>
     </div>
 
 <form name="myform"  method = "POST" action=''>
 <div class="container">
         <div class="row">
                 <label for="na">ID:</label>
                 <input type="number" class="form-control" id="na" name="id" value="<?= $id; ?>">

             <div class="col-sm-6">
                 <label for="una">Name:</label>
                 <input type="text" class="form-control" id="una" name="book" value="<?= $name; ?>">
                 <label for="age">Age:</label>
                 <input type="number" class="form-control" id="age" name="writer" value="<?= $age; ?>">
                 <label for="gen">Gender</label>
                 <input type="text" class="form-control" id="gen" name="publisher" value="<?= $gender; ?>">
                 <label for="dob">Date of Birth</label>
                 <input type="date" class="form-control" id="dob" name="release" value="<?= $dob; ?>">
                 

             </div>
             <div class="col-sm-6">
                 <label for="addr">Address:</label>
                 <input type="number" class="form-control" id="addr" name="page" value="<?= $address; ?>">
                 <label for="uem">Email:</label>
                 <input type="text" class="form-control" id="uem" name="language" value="<?= $email; ?>">
      


             </div> 
            


         </div>
     
 
     <div align="center" id=sub >
            <input type="submit" name="cancel" value="Delete" >
            <input type="submit" name="ok" value="Update" >
     </div>
 </form>
</div>

</div>
             
        
    
        






</body>
    <script>
      
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
}
          
    

    </script>


    </html>