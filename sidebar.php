<?php 

include("config.php");


?>

<!DOCTYPE html>
<html lang="en">
  <head>

  <?php

require_once("style.php");


?>
   
  </head>

<body>
<div class="col-md-3">
          
  <?php 

  global $con; 
  
  $get_cats = "select * from categories";
  
  $run_cats = mysqli_query($con, $get_cats);

  echo "WHAT WE OFFER";
  
  while ($row_cats=mysqli_fetch_array($run_cats)){
  
    $cat_id = $row_cats['category_id']; 
    $cat_title = $row_cats['category_title'];
  
  echo" <a href='' class='list-group-item'> $cat_title </a>";
  
  
  }






           ?>
      </div>
        
       </body>


