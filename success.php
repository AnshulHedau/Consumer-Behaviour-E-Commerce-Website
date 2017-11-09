<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Mining Project</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <?php include 'header.php' ?>




    <div class="row" style="margin-top:10px;text-align:center">
      <div class="small-12">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRslc43eT8wWoEEU3rZjj2IxQaMEwocTPmPY4zfQ0A6hGV7Nmha"><br><br>
        <h1><strong>Success.</strong>Congrats!</h1>
        

        

      </div>
    </div>

<?php include'footer.php' ?>



    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
