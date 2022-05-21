<?php
    require_once('db_connect.php');

    $id = $_GET['id'];
    $$hour_rent = $_GET['$hour_rent'];


    $end_time = date("h:i:s");

    $queryParking = "INSERT INTO parking_info (id, Cid, Gid, start_time, pdate,  status, hour_rent) VALUES('', '$Car_id',  '$Garage_id', '$s_time', '$date', 'Parked', '$rent_hour');";
    $ParkingExecute = mysqli_query($conn,$queryParking);
    
    
    if($ParkingExecute){
        header("Location: COHome.php");
    }
    

?>