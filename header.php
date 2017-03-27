
<?php

include("config.php");


 //if usering is loging out 
if(isset($_POST['logout'])){
 session_start();
 session_destroy();
 header('location: logout.php');
}



?>

<!DOCTYPE html>
<html lang="en">
  <head>

  <?php

require_once("style.php");


?>
   
  </head>
  <body>
  <?php echo "<center> <h1> Hi And Welcome Hope you get the best drink</h1> </center> <h1> <center> Today is " . date("Y/m/d") . "<br> </center></h1>";?>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">


  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Tsarbucks</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Menu And Shopping Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_orders.php">My Orders</a>
      </li>
    
      
    </ul>

  </div>
</nav>
  <img src="https://media.licdn.com/mpr/mpr/shrink_100_100/AAEAAQAAAAAAAAejAAAAJDIxYzdkMTE2LWFlMTMtNDVmYS1hMDc5LTlhZjQ2ZTM4OTEyMA.jpg" width="50px" height="50px" style="margin-left: 1200px; margin-top: -200px">
<center>

 <a class="btn btn-primary" style="margin-right: -990px; margin-top: -250px" href="logout.php"> Logout </a>
 </center>
  <?php

require_once("scripts.php");


?>



  </body>
</html>
