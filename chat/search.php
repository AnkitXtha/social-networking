<?php 
    session_start();
    include("includes/connection.php");
    include("includes/functions.php");
   // include("include/autoload.php")
    $user_data = check_login($conn);
    $ses_name = $_SESSION['socialnet_userid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="includes/instyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="includes/notstyle.css">
</head>
<body>
    <h1>Search</h1>
    <nav>
        <a href="../home.php">Home</a>
        <a href="../logout.php">Logout</a>
    
    <div id="noti">
    <span id="notify" onclick="change()">Inbox</span>
    <span id="notspan"></span>
    </div>
    <div id="new_msg" style="overflow-y: scroll; margin:10px;"> 
    </div>
        
    </nav>
    
 
    </div>
</div>

<div id="in">
    <div id="all_user" style="display:block; overflow-y: scroll; margin:10px; width:250px;">
    </div>
    
</div>
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
        });
          
        
        $(document).ready(function(){
            setInterval(function(){
                $('#notspan').load('number.php');
            },2800);
        });
        
        function change() {
            var x = document.getElementById("new_msg");
            if (x.style.display === "none") {
                x.style.display = "block";
            } 
            else {
                x.style.display = "none";
            }
        }
        </script>
</html>