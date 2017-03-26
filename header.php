
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
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
<span class="navbar-text">

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li>
      <a class="navbar-brand" href="#">Tsarbucks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-controls="home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-controls="messages">Messages</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-controls="settings">Settings</a>
  </li>

</ul>


</span>


<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>
</nav>



  <img src="https://media.licdn.com/mpr/mpr/shrink_100_100/AAEAAQAAAAAAAAejAAAAJDIxYzdkMTE2LWFlMTMtNDVmYS1hMDc5LTlhZjQ2ZTM4OTEyMA.jpg" width="50px" height="50px" style="margin-left: 1200px; margin-top: -240px">
<center>

 <a class="btn btn-primary" style="margin-right: -999px; margin-top: -280px" href="logout.php"> Logout </a>
 </nav>
 </center>
  <?php

require_once("scripts.php");


?>



  </body>
</html>
