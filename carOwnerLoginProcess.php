<?php 
    require_once('db_connect.php');
    $email = $_POST['email'];
    $pass = $_POST['password'];

    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);

    $query2 = "SELECT * FROM `driver_owner` WHERE email = '$email' AND pass  = '$pass';";
    $execute_query = mysqli_query($conn,$query2);
    $result4 = mysqli_fetch_array($execute_query); // to extract status value
    $count=mysqli_num_rows($execute_query);

    if ($count > 0){
        if($result4['status']=='approved'){
            session_start();
            $_SESSION['email']=$email;
            ?>
            <script>
                window.location.assign('COHome.php');
            </script>
            <?php
        }else{
            ?>
            <script>
                window.location.assign('COwnerLoginNotApproved.php');
            </script>
            <?php
        }
        

    }else{
        echo 'unsuccessfull';
        //header('parkingownerlogin.php');
        ?>
        <script>
            window.location.assign('carOwnerLogin.php');
        </script>
        <?php
    }

//   if ($count > 0 && $result2['status']=='pending'){
// 		session_start();
// 		$_SESSION['job_seeker_id']=$result2['job_seeker_id'];
// 		header('location: ../skill_test_varrified/index.php');
// 	}else if ($count > 0 && $result2['status']=='approved'){
// 		session_start();
// 		$_SESSION['job_seeker_id']=$result2['job_seeker_id'];
// 		header('location: ../job_seeker_Home/index.php');
// 	 }

?>