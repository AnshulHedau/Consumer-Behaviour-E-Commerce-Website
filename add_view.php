<?php
    include 'config.php';
    $g = $_GET['g'];
    $p = $_GET['p'];
    $conn = mysqli_connect($db_host, $db_username, $db_password,$db_name);
    if(! $conn ) {
       die('Could not connect: ' . mysqli_error());
    }
    $sql = "INSERT INTO `viewed` (`Name`) VALUES ('$g');";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
    }
    





    $sql = "INSERT INTO `webviewed` (`Site`,`Name`) VALUES ('$p','$g');";
    $retval =  mysqli_query( $conn , $sql);

    if(! $retval ) {
       die('Could not enter data: ' . mysqli_error($conn));
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