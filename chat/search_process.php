<?php 
    session_start();
    include("includes/connection.php");
    include("includes/functions.php");
    $user_data = check_login($conn);
    $ses_name = $_SESSION['user_name'];

    if(isset($_GET['search'])){
        
        $to_find = $_GET['to_find'];
        if(!empty($to_find)){
        $query = "select user_name from users where user_name = '$to_find' limit 1";

        $result = mysqli_query($conn, $query);

        if($result && mysqli_num_rows($result) > 0){
            $searched = mysqli_fetch_assoc($result);
            $_SESSION['receiver'] = $searched['user_name'];
            header("Location:search.php?Receiver-found");
            die;       
        }
        else{
		    echo "<script>alert('No user found'); window.location='search.php'</script>";
            die;
        }

    }
    else{
		    echo "<script>alert('Empty search'); window.location='search.php'</script>";
        die;
    }
}
else{
    echo "<script>alert('Come here in a proper way!!'); window.location='search.php'</script>";
die;
}
?>
