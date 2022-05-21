<?php
    require_once('db_connect.php');

    $id = $_GET['id'];
    $hour_rent = $_GET['hour_rent'];
    $Gid = $_GET['Gid'];


    $end_time = date("h:i:s");

    // checkout query
    $queryParking = "UPDATE parking_info SET end_time='$end_time', rent='$hour_rent', status='Completed' where id=$id;";
    $ParkingExecute = mysqli_query($conn,$queryParking);
    
    // real time spot update query
    $queryParkingSpot = "UPDATE parking_garage SET spot_available =spot_available+1 WHERE id = $Gid;";
    $ParkingSpotExecute = mysqli_query($conn,$queryParkingSpot);
    
    if($ParkingExecute){
         header("Location: COHome.php");
    }
    

?>