<?php
    require_once('db_connect.php');

    $Garage_id = $_GET['Garage_id'];
    $available_spot = $_GET['available_spot'];
    $Car_id = $_GET['Car_id'];
    $rent_hour = $_GET['rent_hour'];

    // parking process
    
    // updating spot number
    $queryParkingGarage = "UPDATE parking_garage SET spot_available =$available_spot-1 WHERE id = $Garage_id;";
    $ParkingGarageExecute = mysqli_query($conn,$queryParkingGarage);
    header("Location: POHome.php");

?>