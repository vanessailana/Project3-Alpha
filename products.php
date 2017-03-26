<?php
 session_start();  
$connect = mysqli_connect("localhost", "root", "root", "Comp484DB");  
 if(isset($_POST["add"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $arrayid = array_column($_SESSION["shopping_cart"], "product_id");  
           if(!in_array($_GET["id"], arrayid))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item = array(  
                     'product_id'               =>     $_GET["id"],  
                     'product_name'               =>     $_POST["hidden_name"],  
                     'product_price'          =>     $_POST["hidden_price"]  
                     
                );  
                $_SESSION["shopping_cart"][$count] = $item;  
           }   
      }  
      else  
      {  
           $item = array(  
                'product_id'               =>     $_GET["id"],  
                'product_name'               =>     $_POST["hidden_name"],  
                'product_price'          =>     $_POST["hidden_price"]  
                
           );  
           $_SESSION["shopping_cart"][0] = $item;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $val)  
           {  
                if($val["product_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                      
                }  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
         <?php include("style.php"); ?>
      </head>  
      <body>  




                
                <?php  
                $query = "SELECT * FROM products";  
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
           <p></p>


             <div class="container" style="margin-top: 100px" >
  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp; &nbsp;  &nbsp;
               

                <div class="container" style="margin-top: -50px"> 
                     <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">  
                           
                               <h1><?php echo $row["name"]; ?></h1>  
                               <h1>$ <?php echo $row["price"]; ?></h1> 
                               <h1><span><b> Product Identification Num: </br> </span> <?php echo $row["id"]; ?></h1> 

                               
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  

                               <input type="submit" name="add" style="margin-top:20px;" class="btn btn-info" value="Add to Cart" />  
                          <p></p>
                     </form>  
                </div>  
               </div>
                <?php  
                     }  
                }  
                ?>  
             
  </p>

 

          

  
  </form>

              
                </center>
                <div class="container" style=" width:500px;margin-right: 20px;margin-top: -4200px; background-color:silver;">  
                <h1> STUPID SHOPPING CART  </h1>
                     <table>  
                     
                          <tr>  
                               <th width="40%">Item Name</th>  
                          
                              <th width="20%">Price</th>  
                               <th width="15%">Delete Item??</th>  
                              
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $val)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $val["product_name"]; ?></td>  
                             
                               <td>$ <?php echo $val["product_price"]; ?></td>  
                                
                               <td><a class="btn btn-success"  href="index.php?action=delete&id=<?php echo $val["product_id"]; ?>">Remove</td>  </a>
                          </tr>  
                          <?php  
                                    $total = $total +  $val["product_price"];  
                               }  
                          ?>  
                        
                          <?php  
                          }  
                          ?>  


                     </table>  

                      
                               <h1> Total COST OF DAMAGE </h1>
                               <h1>$ <?php echo number_format($total, 2); ?></h1>  
                               <td></td>  

           


                         
                </div>  
           </div>  

           <div class="container" style="margin-right: -900px">
           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Submit Order Idiot</button>
           </div>

  </p>

  <p></p>

 


  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><center> Hi person. We hope you have a pleasant experience in our site.</center></h4>
        </div>
        <div class="modal-body">
        <img src="https://s-media-cache-ak0.pinimg.com/736x/85/1d/ef/851def553d0e9d461d529cda41bbdf9a.jpg" width="200px">
          <p>  <mark>I hope you picked everything you want. If you want to proceed press the submit button to finish your order.  </mark> </p>
          <p> <mark> If you still nedd more time simply close the modal </mark> </p>


        </div>
        <div class="modal-footer">

  
            <form action="submit.php" method="post">

            <input type="submit" value="Submit" class="btn btn-outline-primary" name="login">

       </form>
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
   
