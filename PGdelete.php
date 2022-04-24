<?php
    require_once('db_connect.php');
    $id = $_GET['id'];
    $queryapprove = "DELETE FROM parking_garage WHERE id = $id;";
    //$approveExecute = mysqli_query($conn,$queryapprove);
    //header("Location: admin.php");

?>