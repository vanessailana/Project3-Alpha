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

include("adminheader.php");


?>

<div class="col-6-md" >
<div class="alert alert-success">
  <h1>Pending Orders</h1> 
  <h2> To Change the status of an order to  Complete. Please  press the <kbd> RED </kbd> button infront of you and you will be redirect </h2>


 
  <form action="edit.php">
    <input type="submit"  style="float:right margin-top:50px" class="btn btn-danger btn-lg" value="Change Order Status" />


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
     <h2><small>&nbsp;&nbsp;&nbsp;<?php echo $row["Items_bought"];?></small>  </h2>
    </div>
    <div class="col-md-2">
     <h2><small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge badge-success"><?php echo $row["status"];?> </span> </small></h2>
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