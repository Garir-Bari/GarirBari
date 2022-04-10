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
    VALUES('', '$email', '$password', '$name', '$nid', '$contact', '$address', '$occupation', '$gender', 'pending');";

    $execute_query = mysqli_query($conn,$query);

    if($create_query){
        $job_seeker_Details = "SELECT * FROM `job_seeker` WHERE user_name = '$user_name';" ;
        $result2 = mysqli_query($conn, $job_seeker_Details);
        $job_seeker_data = mysqli_fetch_array($result2);
        session_start();
		$_SESSION['job_seeker_id'] = $job_seeker_data['job_seeker_id'];;

        if($job_seeker_data['status']=='pending'){
            //echo "admin not confirmed yet";
            header("Location: ../skill_test_varrified/index.php");
        }
    }else{
        echo "unsuccessfull";
    }


?>