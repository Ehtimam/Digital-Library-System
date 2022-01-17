<?php     
include('db.php');
                
 $sql = "SELECT notice FROM u_notify WHERE i='1'";

 $query_run = mysqli_query($con, $sql);
 
   $row = mysqli_fetch_row($query_run);

   
     
    
  ?>

  <html>


      <head>
        <style>

            h2{
                padding-left: 750px;
            }



        </style>    


    </head>
     <body>
        <h2><?= implode(" ",$row);?></h2>
        
   </body>
</html>
