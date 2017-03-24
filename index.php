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
