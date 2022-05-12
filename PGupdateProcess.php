<?php 
    require_once('db_connect.php');

     $id = $_POST['id'];
     //echo $cctv;
     $c_name = $_POST['c_name'];
     $c_nid = $_POST['c_nid'];
     $phone = $_POST['phone'];
     $p_address = $_POST['p_address'];
     $no_of_spot = $_POST['no_of_spot'];
     $rent_hour = $_POST['rent_hour'];
     $PS_time = $_POST['PS_time'];
     $PE_time = $_POST['PE_time'];
     $cctv = $_POST['cctv'];
     //echo $cctv;

    try{
        $query = "UPDATE parking_garage SET c_name='$c_name', c_nid='$c_nid', contact='$phone', p_address='$p_address', no_of_spot='$no_of_spot', 
               rent_hour='$rent_hour', PS_time='$PS_time', PE_time='$PE_time', cctv='$cctv' WHERE id= $id;";
    }
    catch(Exception $e) {
        echo 'Message';
    }

    //  $query = "UPDATE parking_garage SET c_name=$c_name, c_nid=$c_nid, contact=$phone, p_address=$p_address, no_of_spot=$no_of_spot, 
    //            rent_hour=$rent_hour, PS_time=$PS_time, PE_time=$PE_time, cctv=$cctv WHERE id= $id;";
     //(id, POid, c_name, c_nid, contact, p_address, no_of_spot, rent_hour, PS_time, PE_time, cctv , status) 
    // VALUES('', '$PO_id',  '$c_name', '$c_nid', '$phone', '$p_address', '$no_of_spot', '$rent_hour', '$PS_time', '$PE_time', '$cctv', 'pending');";
    try{
        $execute_query = mysqli_query($conn,$query);
    }
    catch(Exception $e) {
        echo 'Message';
    }
    
    if($execute_query){
        ?>
        <script>
            window.location.assign('POHome.php');
        </script>
        <?php
    }
    else{
        ///session doesn't contain any valid user email
        echo 'unsucessful';
    }
    
    
?>  