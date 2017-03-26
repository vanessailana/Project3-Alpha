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

      $stmnt= "select * from people where username='${username}' AND  password='${password}' ";


      $query=mysqli_query($con, $stmnt);
      $ppl = mysqli_fetch_array($query);


      $person=$ppl[0];
      //this is the first row; it should be only one user with that username;   
      //
    

      if($person['role_id']=='1') {

        header("Location: index.php");
      }

      elseif($person['role_id']=='2') {
          echo "ugly";

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

    <h1> Bye And Come Back If You want Maybe!  <span class="glyphicon glyphicon-thumbs-down">
        </a></h1>
    </center>

    <center>

    <form method="post">

	<input type="text" name="username" placeholder="User Name">

	<input type="password" name="password" placeholder="*******">

<div class="container">
<p></p>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login AGAIN Idiot</button>

  <p></p>

  <div class="container">


 <img src="https://cdn.meme.am/instances/45936082.jpg">
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