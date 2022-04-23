<?php
    require_once('db_connect.php');
    $id = $_GET['id'];
    $queryapprove = "UPDATE parking_owner SET status = 'approved' WHERE id = $id;";
    //$getData = mysqli_query($conn,$queryapprove);
    //header("Location: index.php");

?>