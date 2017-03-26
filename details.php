<?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                              
                               <th width="20%">Price</th>  
                               <th width="15%">delete</th>  
                              
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["cart"] as $keys => $val)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $val["product_title"]; ?></td>  
                              
                               <td>$ <?php echo $val["product_price"]; ?></td>  
                             
                               <td><a href="index.php?delete=delete&id=<?php echo $val["product_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total +  $val["product_price"];  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>