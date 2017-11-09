<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || Web Mining</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <?php include 'header.php' ?>

    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p style= "align:center">This is our Web Mining Project</p>
        <p>Usually in e-commerce website it is difficult to predict which product is used more by consumers and is in more demand as it changes dynamically with time. This application can be used an extension for any e-commerce website which can display clear statistics of the hit ratio of every
product ordered by the consumers and the price of the product can be changed dynamically accordingly.</p>

<p>The rankings of the products based on the number of hits will help to increase the sales of the products which are more demanding and decrease the cost of products which are less demanding.</p>
</p>
        <?php include 'footer.php' ?>
      </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
