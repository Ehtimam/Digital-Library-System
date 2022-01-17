<?php 
    session_start();
     $con = mysqli_connect('localhost', 'root', '', 'eht');

        if(isset($_POST['search']))
                {
                    $filtervalues = $_POST['search'];
                    $query = "SELECT * FROM worker WHERE CONCAT(id,name,address,email,phone,age,gender,nid,dob) LIKE '%$filtervalues%' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $items)
                            {     
                                  $id = $items['id'];  
                                  $name = $items['name'];
                                  $address = $items['address'];   
                                  $email = $items['email'];   
                                  $phone = $items['phone'];   
                                  $age = $items['age'];   
                                  $gender = $items['gender'];   
                                  $nid = $items['nid'];   
                                  $dob = $items['dob'];   
                                                 
                            }
                    }
                    else
                        {
                            
                        }
                }
                if (isset($_POST['ok'])) {
                    $id1 = $_POST['uid'];
                    $name1 = $_POST['uname'];
                    $age1 = $_POST['uage'];
                    $gender1 = $_POST['gen'];
                    $dobirth1 = $_POST['udob'];
                    $address1 = $_POST['uadd'];
                    $email1 = $_POST['uemail'];
                    $mobile1 = $_POST['uphone'];
                    $nid1 = $_POST['unid'];
                
                    $sql = $sql = "UPDATE worker SET phone='$mobile1',age='$age1',nid='$nid1',dob='$dobirth1',name= '$name1',gender='$gender1',address='$address1',email='$email1' WHERE id='$id1'" ;
                    
                    $result = mysqli_query($con, $sql);
                
                    if($result){
                        echo "You have Succesfully inserted.";
                    } else {
                        echo "Oops! Something went wrong.";
                    }
                } 
                if (isset($_POST['cancel'])) {
                    
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
                        <li><a id="page1link1" href="Updatebook.php">Update Books</a></li>
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
                                        <li><a href="admin_accounts.php">Admin List and Update</a></li>
                                        <li><a href="user_accounts.php">Users List</a></li>
                                    </ul>    


                                    <li><a href='loggout.php'>Exit</a></li>
            </ul>

        </div>

        <div id="content" onclick="w3_close()">
            
        <div id="worker">
        <h3 align="center"> Update Worker info </h3>

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
                 <input type="number" class="form-control" id="na" name="uid" value="<?= $id; ?>">

             <div class="col-sm-6">
                 <label for="una">Name:</label>
                 <input type="text" class="form-control" id="una" name="uname" value="<?= $name; ?>">
                 <label for="age">Age:</label>
                 <input type="number" class="form-control" id="age" name="uage" value="<?= $age; ?>">
                 <label for="gen">Gender</label>
                 <input type="text" class="form-control" id="gen" name="gen" value="<?= $gender; ?>">
                 <label for="dob">Date of Birth</label>
                 <input type="date" class="form-control" id="dob" name="udob" value="<?= $dob; ?>">
                 

             </div>
             <div class="col-sm-6">
                 <label for="addr">Address:</label>
                 <input type="text" class="form-control" id="addr" name="uadd" value="<?= $address; ?>">
                 <label for="uem">Email:</label>
                 <input type="email" class="form-control" id="uem" name="uemail" value="<?= $email; ?>">
                 <label for="phone">Mobile:</label>
                 <input type="number" class="form-control" id="phone" name="uphone" value="<?= $phone; ?>">
                 <label for="nid">NID:</label>
                 <input type="number" class="form-control" id="nid" name="unid" value="<?= $nid; ?>">

             </div> 
            


         </div>
     
 
     <div align="center" id=sub >
             
            <input type="submit" name="cancel" value="Delete" >
            <input type="submit" name="ok" value="Update" >
             
     </div>
 </form>
</div>

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