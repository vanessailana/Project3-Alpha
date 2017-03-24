<?php 

include("config.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php 

include("style.php");



?>


<body>
<div class="col-md-3">
          
  <?php 

  global $con; 
  
  $get_cats = "select * from products";

  
  $run_cats = mysqli_query($con, $get_cats);

  echo "<div class='container' style='margin-right:-500px'><h1> The Really COOL MENU </h1></div>";
  
  while ($row_cats=mysqli_fetch_array($run_cats)){
  
    $product_title = $row_cats['product_title']; 
    $product_price = $row_cats['product_price'];
  
  echo" <div class= 'container' style='margin-right:-500px'> <center> <a href='' class='list-group-item'> $product_title  &#36;$product_price</a></center><a class='btn btn-info' target='_blank' href='item.php'?> Add to Cart </a><p></p></div>";
  
  
  }






           ?>
      </div>
        
       </body>
