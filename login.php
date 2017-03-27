<?php


// After uploading to online server, change this connection accordingly
$con = mysqli_connect("localhost","root","root","Comp484DB");

if (mysqli_connect_errno())
  {
  echo "The Connection was not established: " . mysqli_connect_error();
  }

  else {


    
  }


  //checking the user
  //
  //
  
  
  if(isset($_POST['login'])) {

      $username = mysqli_real_escape_string($con,$_POST['username']);

      $password = mysqli_real_escape_string($con,$_POST['password']);


       $user_id = mysqli_real_escape_string($con,$_POST['user_id']);

      $stmnt= "select * from people where username='${username}' ";


      $query=mysqli_query($con, $stmnt);
      $ppl = mysqli_fetch_array($query);


      $person=$ppl[0];
      //this is the first row; it should be only one user with that username;   
      //
      //
   
   echo $person;

      if($person['role_id']=='1') {

        header("Location: adminlogin.php");
        exit();
        
      }

      elseif($person['role_id']=='2') {
         header("Location: index.php");
        exit();
      
          

      }

      else {
    $message = "wrong password, username, or you didnt enter anything idiot";
      echo "<script type='text/javascript'>alert('$message');</script>";  
      echo "<div class=jumbotron> <h1> Wrong Input!</h1>      
  <p><img src='https://i.ytimg.com/vi/Y4l5wM5o2Lg/hqdefault.jpg'></p>
</div>";

      }




}






?>



<!DOCTYPE html>
<html lang="en">
  <head>
  
       <?php include 'style.php';?>
    
  </head>
  <body>
  <center>



    <h1>Welcome To Tarbucks </h1>
    <h2> The best Coffee int town! </h2>
    <h3> Login type in your credentials and the magic will begin! </h3>

    <title> The best coffee </title>
    </center>

    <center>

    <form method="post">

	<input type="text" name="username" placeholder="User Name">

	<input type="password" name="password" placeholder="*******">

<div class="container">
  <p></p>

  <p>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login Idiot</button>

  </p>

  <p></p>

  <div class="container">

<iframe width="560" height="315" src="https://www.youtube.com/embed/FRz3vfRFfs4" frameborder="0" allowfullscreen></iframe>

</div>


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center> Hi either customer or barista </center></h4>
        </div>
        <div class="modal-body">
        <img src="https://media3.giphy.com/media/xT5LMGMqRlrWjTe9WM/200_s.gif">
          <p>Just Want to Make You Are Not A Robot.</p>
            <p>I wanted a stupid modal to appear</p>
            <p> You can either actually login or close this modal and do something else </p>

        </div>
        <div class="modal-footer">

  
            
            <input type="submit" class="btn btn-outline-primary" name="login" value="login">

       
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

          

	
	</form>




  
  <?php include 'scripts.php';?>
  

  </body>

</html>