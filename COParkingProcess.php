<?php
    require_once('db_connect.php');
    $Garage_id = $_GET['Garage_id'];
    $available_spot = $_GET['available_spot'];
    $Car_id = $_GET['Car_id'];
    $queryapprove = "DELETE FROM parking_garage WHERE id = $id;";
    $approveExecute = mysqli_query($conn,$queryapprove);
    header("Location: POHome.php");

?>