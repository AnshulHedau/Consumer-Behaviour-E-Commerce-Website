<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products || Web Mining Project</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
      
      
      
      <script>
        function showHint(str,str1) {
            alert(str1);
            if (str.length == 0) { 
                document.getElementById(str).innerHTML = "yes";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById(str).innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "add_view.php?g=" + str+"&p="+str1    , true);
                xmlhttp.send();
            }
        }
        </script>   
  </head>
  <body>

    
    <?php include 'header.php' ?>




    <div class="row" style="margin-top:50px;">
      <div class="small-4 medium-4 large-4 columns" style="text-align:center">
        <?php
          
                    $conn = mysqli_connect($db_host, $db_username, $db_password,$db_name);
                    if(! $conn ) {
                       die('Could not connect: ' . mysqli_error());
                    }
                    $sql = "select Site,count(Site) from webviewed group by Site ;";
                    $retval =  mysqli_query( $conn , $sql);

                    if(! $retval ) {
                       die('Could not enter data: ' . mysqli_error($conn));
                    }
                    echo "<h3>Most Popular Website</h3><br><br>";
                    echo "<table><tr><th>Website</th><th>Clicks </th></tr>";
                    while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
                            {
                                $NAme = $row['Site'];
                                $Count = $row['count(Site)'];
                                echo "<tr><td>$NAme</td> <td>$Count</td></tr>";

                            }
      
                    echo "</table>";
      ?>    
        </div>
        
        <div class="small-4 medium-4 large-4 columns" style="text-align:center">
        <?php
                    $sql = "select product_name, sum(units) from orders group by product_name order by sum(units) desc;";
                    $retval =  mysqli_query( $conn , $sql);

                    if(! $retval ) {
                       die('Could not enter data: ' . mysqli_error($conn));
                    }
                    echo "<h3>Most Purchased Product</h3><br><br>";
                    echo "<table><tr><th>Product</th><th>Clicks  </th></tr>";
                    while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
                            {
                                $NAme = $row['product_name'];
                                $Count = $row['sum(units)'];
                               echo "<tr><td>$NAme</td> <td>$Count</td></tr>";

                            }
                    
                    echo "</table>"

            ?>
        </div>
        
        <div class="small-4 medium-4 large-4  columns" style="text-align:center">
        <?php

                    $sql = "select Name,count(Name) from viewed group by Name order by count(Name) desc;";
                    $retval =  mysqli_query( $conn , $sql);

                    if(! $retval ) {
                       die('Could not enter data: ' . mysqli_error($conn));
                    }

            
                    echo "<h3>Most Viewed Product</h3><br><br>";  
                    echo "<table><tr><th>Product</th><th>Clicks  </th></tr>";
                    while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
                            {
                                $NAme = $row['Name'];
                                $Count =  $row['count(Name)'];
                                echo "<tr><td>$NAme</td> <td>$Count</td></tr>";
                            }
            
            
                    
            
                    echo "</table>";
          ?>
        </div>
      </div>

        
    <?php include 'footer.php' ?>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
