<?php
    include 'config.php';
    $conn = mysqli_connect($db_host, $db_username, $db_password,$db_name);
    if(! $conn ) {
       die('Could not connect: ' . mysqli_error());
    }
    $sql = "select Site,count(Site) from webviewed group by Site ;";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
    }

    while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
            {
                $NAme = $row['Site'];
                echo "Most Popular Website    : $NAme<br>";
    
            }
    $sql = "select product_name, sum(units) from orders group by product_name order by count(product_name) desc;";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
    }

    while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
            {
                $NAme = $row['product_name'];
                echo "Most Purchased Product : $NAme<br>";
    
            }



    $sql = "select Name,count(Name) from viewed group by Name order by count(Name) desc;";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
    }

    while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
            {
                $NAme = $row['Name'];
                echo "Most Viewed Product    : $NAme<br>";
    
            }
    

    /*$votedfor = $_POST['radio-group'];
    echo "You have Voted for : ".$votedfor;
    
    $row = mysqli_fetch_array($retval, MYSQL_ASSOC);
    $x = $row['novotes'];
    $sql = "UPDATE result SET novotes = ($x+1) where name='".$votedfor."';";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
    }*/
?>