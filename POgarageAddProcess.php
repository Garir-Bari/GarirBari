<?php 
    require_once('db_connect.php');

    $PO_id = $_POST['PO_id'];
    $c_name = $_POST['c_name'];
    $c_nid = $_POST['c_nid'];
    $phone = $_POST['phone'];
    $address = $_POST['p_address'];
    $no_of_spot = $_POST['no_of_spot'];
    $rent_hour = $_POST['rent_hour'];
    $PS_time = $_POST['PS_time'];
    $PE_time = $_POST['PE_time'];
    $cctv = $_POST['cctv'];

    

    $query = "INSERT INTO parking_garage (id, POid, c_name, c_nid, contact, p_address, no_of_spot, rent_hour, PS_time, PE_time, cctv  status) 
    VALUES('', '$PO_id',  '$c_name', '$c_nid', '$phone', '$address', '$no_of_spot', '$rent_hour', '$PS_time', '$PE_time', '$cctv', 'pending');";

    $execute_query = mysqli_query($conn,$query);

    //?>
    <!-- <script>
        window.location.assign('parkingownerlogin.php');
    </script> -->
    // <?php
    


?>  