<?php
    include 'config.php';
    $conn = mysqli_connect($db_host, $db_username, $db_password,$db_name);
    if(! $conn ) {
       die('Could not connect: ' . mysqli_error());
    }
    $sql = "SELECT DISTINCT name,image,links,price FROM `items` ORDER BY `name` DESC LIMIT 30 ;";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
    }
    $i=1;
    while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
    {
        $NAME = $row['name'];
        $IMAGE = $row['image'];
        $LINKS = $row['links'];
        $PRICE = $row['price'];
        $CODE = "DSLR$i";
        $P = substr($PRICE,3);
        echo "$NAME $CODE $P<br>";
            $sql =   "INSERT INTO `product` (`id`, `product_code`, `product_name`, `product_desc`, `product_link`, `product_img_link`, `qty`, `price`) VALUES ('$i','$CODE','$NAME','$NAME','$LINKS','$IMAGE',10,'$P');";
            echo "$sql";
            
            $i++;
            $retval1 =  mysqli_query( $conn , $sql);

            if(! $retval1 ) {
               die('Could not enter data: ' . mysqli_error($conn));
            }
        /*$sql = "select novotes from result where name='".$votedfor."'";
        $retval =  mysqli_query( $conn , $sql);

        if(! $retval ) {
           die('Could not enter data: ' . mysqli_error($conn));
        }*/
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