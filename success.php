<?php

session_start();

include("config.php");

$sql = "UPDATE ordertable SET status='Order is Complete' WHERE order_id='$_POST[orderid]'";

if (mysqli_query($con, $sql)) {
    

} else {
    echo "Error updating record: " . mysqli_error($con);
}

session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
  <head>

<?php include("style.php"); ?>
   
  </head>
  <body>
 
 <?php include("adminheader.php"); ?>



<div class="jumbotron jumbotron-fluid">
  <div class="alert alert-success">
    <h1> You have successfully changed this order status! </h1>
  </div>
</div>
<p></p>

<form action="pendingorders.php" method="post">



<input type="submit"  class="btn btn-success btn-lg"  name="name" value="GO BACK TO PENDING ORDERS PAGE">  </br>

</form>






<?php include("scripts.php");?>

</body>
</html>
