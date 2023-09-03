<?php

session_start();
include("includes/connection.php");
$user = $_SESSION['socialnet_userid'];
// mysqli_query($conn, "UPDATE users SET log_in = 0 WHERE socialnet_userid = '$user'");
if(isset($_SESSION['socialnet_userid'])){

    unset($_SESSION['socialnet_userid']);
    unset($_SESSION['receiver']);

}

header("Location: sign_in.php");
die;