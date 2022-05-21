<?php
    require_once('db_connect.php');

    $Garage_id = $_GET['Garage_id'];
    $available_spot = $_GET['available_spot'];
    $Car_id = $_GET['Car_id'];
    $rent_hour = $_GET['rent_hour'];

    //echo $Garage_id;
    //echo $Car_id;

    // parking process
    $date = date("d-m-Y");
    $s_time = date("h:i:s");

    $queryParking = "INSERT INTO parking_info (id, Cid, Gid, start_time, pdate,  status, hour_rent) VALUES('', '$Car_id',  '$Garage_id', '$s_time', '$date', 'Parked', '$rent_hour');";
    $ParkingExecute = mysqli_query($conn,$queryParking);
    
    // updating spot number
    $queryParkingSpot = "UPDATE parking_garage SET spot_available =$available_spot-1 WHERE id = $Garage_id;";
    $ParkingSpotExecute = mysqli_query($conn,$queryParkingSpot);
    if($ParkingExecute){
        header("Location: COHome.php");
    }
    

?>