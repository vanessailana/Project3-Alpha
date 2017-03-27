


<?php

require_once("config.php");


?>



<!DOCTYPE html>
<html lang="en">
  <head>

  <?php

require_once("style.php");


?>
   
  </head>
  <body>
  <?php echo "<center> <h1> <center> Today is " . date("Y/m/d") . "<br> </center></h1>";?>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Tsarbucks</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="adminhome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pendingorders.php"><b> Pending Orders </br></a>
      </li>
     
      
    </ul>

  </div>
</nav>

<center>

 <a class="btn btn-primary" style="margin-right: -1100px; margin-top: -190px" href="logout.php"> Logout </a>
 </center>
  <?php

require_once("scripts.php");


?>



  </body>
</html>