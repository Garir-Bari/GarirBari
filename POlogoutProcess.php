<?php
    /// delete the session variable
    /// forward to sign in page

    
    session_start();

    unset($_SESSION['email']);
    session_destroy();

    echo "<script>window.location.assign('parkingownerlogin.php');</script>";
?>