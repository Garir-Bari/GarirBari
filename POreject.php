<?php
    require_once('db_connect.php');
    $id = $_GET['id'];
    $queryReject = "DELETE FROM parking_owner WHERE id = $id;";
    $rejectExecute = mysqli_query($conn,$queryReject);
    header("Location: admin.php");

?>