<?php

    $servername = 'localhost';
    $dbUsername = 'root';
    $dbpassword = '';
    $dbname = 'garirbari';
    
    $conn = mysqli_connect($servername, $dbUsername, $dbpassword, $dbname);

    if(!$conn){
        //echo "Database connection failed";
    }else{
        //echo "Database connection successfull";
    }
?>