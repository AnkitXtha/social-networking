<?php 
    session_start();
    include("includes/connection.php");
    include("includes/functions.php");
    $user_data = check_login($conn);
    $ses_name = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="includes/instyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <h1>Your Details</h1>
    <nav>
        <a href="search.php">Search People</a>
        <a href="logout.php">Logout</a>
    </nav>
    <div id="detail">
    <?php
        $query = "select id, user_name, country, gender from users where user_name = '$ses_name' limit 1";
        $result = mysqli_query($conn, $query);

        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
                echo "ID: ".$user_data['id']."<br>";
                echo "Username: ".$user_data['user_name']."<br>";
                echo "Country: ".$user_data['country']."<br>";
                echo "Gender: ".$user_data['gender']."<br>";
        }   
    ?>
    </div>

<div id="all_user" style="display: none;"></div>
             <div id="new_msg" style="display:none;"></div>
</body>
<script>
        $(document).ready(function(){
            setInterval(function(){
                $('#all_user').load('fetch.php');
            },2000);
        });

        $(document).ready(function(){
            setInterval(function(){
                $('#new_msg').load('notification.php');
            },2800);
        })
            
        </script>
</html>