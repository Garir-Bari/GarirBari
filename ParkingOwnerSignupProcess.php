<?php 
    require_once('db_connect.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $nid = $_POST['nid'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $occupation = $_POST['occupation'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $query = "INSERT INTO parking_owner (id, email, pass,  name, nid, contact, address, occupation, gender,  status) 
    VALUES('', '$email', '$password', '$name', '$nid', '$phone', '$address', '$occupation', '$gender', 'pending');";

    $execute_query = mysqli_query($conn,$query);

    ?>
    <script>
        window.location.assign('parkingownerlogin.php');
    </script>
     <?php
    


?>