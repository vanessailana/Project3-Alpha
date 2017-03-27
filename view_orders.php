<?php include("config.php") ?>

<!DOCTYPE html>
<html lang="en">
  <head>

  <?php

require_once("style.php");


?>
   
  </head>
  <body>

    <?php

include("header.php");


?>

<div class="col-6-md" >
<div class="alert alert-success">
  <h1>Your Orders DUDE!</h1> 


</div>
 </div>
<div class="row">
    <div class="col-md-2">
      <h1>Order Id</h1>
    </div>
    <div class="col-md-2">
      <h1> User Id </h1>
    </div>
    <div class="col-md-2">
      <h1> Product Id(s) </h1>
    </div>
    <div class="col-md-2">
      <h1> Order Total </h1>
    </div>
    <div class="col-md-2">
     <h1> Items Bought(s) </h1>
    </div>
    <div class="col-md-2">
     <h1> Order Status </h1>
    </div>


</div>

<?php  
  $query = "SELECT * FROM ordertable";  
  $result = mysqli_query($con, $query);  
          if(mysqli_num_rows($result) > 0)  
          {  
              while($row = mysqli_fetch_array($result))  
                {  

                      
  ?>  

 
  <div class="row">
 
    <div class="col-md-2">
      <h2><small>&nbsp;&nbsp;&nbsp;<?php echo $row["order_id"]; ?></small></h2>
    </div>
    <div class="col-md-2">
      <h2><small>&nbsp;&nbsp;&nbsp;<?php echo $row["user_id"]; ?></small></h2>
    </div>
    <div class="col-md-2">
      <h2><small>&nbsp;&nbsp;&nbsp;<?php echo $row["productid"]; ?> </small> </h2>
    </div>
    <div class="col-md-2">
      <h2><small>&nbsp;&nbsp;&nbsp;&#36;<?php echo $row["price"];?> </small> </h2>
    </div>
    <div class="col-md-2">
     <h2><small>&nbsp;&nbsp;&nbsp;<?php echo $row["Items_bought"];?> </small> </h2>
    </div>
    <div class="col-md-2">
     <h2><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge badge-success"><?php echo $row["status"];?> </span></small> </h2>
    </div>


       </div>
      

        


   <?php  
      
      }  
  

  }  
?> 
   

<?php

include("scripts.php");

?>

  </body>
</html>
