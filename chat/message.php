<?php 

    session_start();
    include("includes/connection.php");
    include("includes/functions.php");
    $user_data = check_login($conn);

    if(isset($_GET['send'])){
        $msg_to_db = $_GET['msg_to_send'];
        $sender = $_SESSION['socialnet_userid'];
        
        if(isset($_SESSION['receiver'])){
            $receiver = $_SESSION['receiver'];
      
            $query ="INSERT INTO `msg`(`sender`, `receiver`, `message`, `status`, `notify`) VALUES ('$sender','$receiver','$msg_to_db',1, 1)";
            mysqli_query($conn,$query);
            // $result = mysqli_query($conn,"UPDATE msg SET status = 1 WHERE sender='$sender' AND receiver ='$receiver' AND message = '$msg_to_db'");
            echo "<script>window.location='chat.php?chat=$receiver'</script>";
            die;
        }
        else{
            echo "<script>alert('receiver not set'); window.location='search.php'</script>";
            die;
        }
    }
    else{
    echo "<script>alert('Come here in a proper way!!'); window.location='chat.php'</script>";
    die;
    }

?>