
<?php
session_start();
  
  $conn = new PDO('mysql:host=localhost;dbname=Comp484DB','root','root');
  
  if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = $conn->prepare("SELECT COUNT(id) FROM admin WHERE username = '$username' AND password = '$password' ");
    $query->execute();
    
    $count = $query->fetchColumn();
    
    
    if($count == "1"){
      $_SESSION['username'] = $username;
      header('location:home.php');  
     
    }
    else{
      $message = "wrong password, username, or you didnt enter anything idiot";
      echo "<script type='text/javascript'>alert('$message');</script>";  
      echo "<div class=jumbotron> <h1> Wrong Input!</h1>      
  <p></p>
</div>";
    }     
  }﻿
?>﻿
<?php

include("config.php");


?>

<center>
 <form method = "post" name = "logout">
 <input type = "submit" class="btn btn-primary" style="margin-top:-100px; margin-right: -1000px" name="logout" value="log me out">
 </form>
 </center>

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

    <?php

include("sidebar.php");


?>
</div>

<div class="col-6-xs" style="margin-top: -100px">
    <?php

include("products.php");


?>

</div>

   

<?php

require_once("scripts.php");

?>

  </body>
</html>
