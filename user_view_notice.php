

<?php     
include('db.php');
                
 $sql = "SELECT notice FROM notify WHERE i='1'";

 $query_run = mysqli_query($con, $sql);
 
   $row = mysqli_fetch_row($query_run);

   
     
    
  ?>

  <html>


      <head>
        <style>

            p{
                padding-right: 850px;
            }



        </style>    


    </head>
     <body>
        <p><?= implode(" ",$row);?></p>
        
   </body>
</html>
