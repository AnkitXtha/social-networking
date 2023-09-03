<?php  
    session_start();
    include("includes/connection.php");
    include("includes/functions.php");
    $user_data = check_login($conn);
     
    $sender = $_SESSION['socialnet_userid'];
 
    $result = mysqli_query($conn,"SELECT * FROM msg WHERE receiver = '$sender' AND status = 1 ORDER BY id DESC") or die(mysqli_error($conn));
    echo mysqli_num_rows($result);
?>     