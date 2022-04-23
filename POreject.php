<?php
    require_once('db_connect.php');
    $id = $_GET['id'];
    $queryReject = "DELETE FROM parking_owner WHERE id = $id;";
    //$approveExecute = mysqli_query($conn,$queryapprove);
    //header("Location: admin.php");

?>