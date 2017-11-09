<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Orders || Web Mining Project</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    
    <?php include 'header.php' ?>




    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>My COD Orders</h3>
        <hr>

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT orders.id , orders.product_code, orders.product_name, orders.product_desc, orders.price, orders.units, orders.total, orders.date, orders.email ,product.product_img_link from orders inner join product on product.product_code=orders.product_code where orders.email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<div class="row">';
                 echo '<div class="small-6 columns">';
                      echo '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
                      echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
                      echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
                      echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
                      echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
                      echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
                      echo '<p><strong>Total Cost</strong>: '.$currency.$obj->total.'</p>';
                  echo '</div>';
                  echo '<div class="small-4 columns">';
                    echo '<img src="'.$obj->product_img_link.'"/>';
                  echo '</div>';
               echo '</div>';

            }
          }
        ?>
      </div>
    </div>




    <?php include 'footer.php'; ?>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
