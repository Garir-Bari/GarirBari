<?php
    require_once('db_connect.php');

    $id = $_GET['id'];
    $hour_rent = $_GET['hour_rent'];


    $end_time = date("h:i:s");

    $queryParking = "UPDATE parking_info SET end_time=$end_time, rent=$hour_rent, status='Completed';";
    //$ParkingExecute = mysqli_query($conn,$queryParking);
    
    
    // if($ParkingExecute){
    //     header("Location: COHome.php");
    // }
    

?>