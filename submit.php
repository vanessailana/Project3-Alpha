<!DOCTYPE html>
<html lang="en">
  <head>
  
       <?php include 'style.php';?>
    
  </head>
  <body>
  <center>
 <?php include("header.php") ?>

<h1>  Before we proceed and submit your order to be processed </h1>

<h2> This is really annoying, but </h2>

<h3>  Please  type in the following, so you can eventually get your order. </h3>

<h1> Your user id </h1>

<h1> The product id number. (If you forgot it refer back to the menu, its there) </h1>

<h1> The total cost of your order </h1>

<h1> And type in the following items, you purchased </h1>


<h1> Also order id number is <?php $n1 = rand (1, 99); echo  "<mark>". $n1 ."</mark>"; ?> <p></p> So Please type it in the provided box to make our life way easier</h1>

<div class="form-group">
<form action="submit.php" method="post">


<label> User Id </label>

<input type="text" name="userid"> </br>


<label> Order Id </label>

<input type="text" name="orderid"> </br>



<label> Product Identification Number(s) </label>

<input type="text" name="productid"></br>



<label> Total Cost from Shopping Cart </label>

<input type="text" name="cost"></br>


<label> List of Item(s) that were purchased </label>
<textarea type="text" name="text"></textarea>

<input type="submit"  class="btn btn-primary"" name="name" value="SUBMIT ORDER">  </br>



</div>
</form>
</center>
</body>
</html>


<?php $n1 = rand (1, 99); echo $n1 ?>
					

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Comp484DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ordertable (order_id, productid, price,Items_bought,status,user_id)
VALUES ('$_POST[userid]','$_POST[productid]','$_POST[cost]','$_POST[text]','Pending','$_POST[userid]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
