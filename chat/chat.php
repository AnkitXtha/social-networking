<?php 

    session_start();
    include("includes/connection.php");
    include("includes/functions.php");

    $user_data = check_login($conn);
    $sender = $_SESSION['socialnet_userid'];
    if(isset($_GET['chat'])){
      $receiver = $_GET['chat'];
        $_SESSION['receiver'] = $receiver;
    
    }
    
    else{
        echo "<script>alert('receiver not set'); window.location='search.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="includes/instyle.css">
    <!-- <audio id='sound' src="includes/notification.mp3"></audio> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>

        $(document).ready(function(){
            setInterval(function(){
                $('#messages').load("showchat.php");
            },20)
        });


        $(document).ready(function(){
            setInterval(function(){
            $('#messages').animate({
                scrollTop:$('#messages')[0].scrollHeight
            });
        },2000);
        });

    </script>
    <link rel="stylesheet" href="includes/notstyle.css">
</head>
<body>
    <h1>Chat</h1>
<nav>
    <a href="search.php">Search</a>
    <a href="../logout.php">Logout</a> 
    <div id="noti">
    <span id="notify" onclick="change()">Inbox</span>
    <span id="notspan"></span>
    </div>
    <div id="new_msg" style="overflow-y: scroll; margin:10px;"> 
    </div>
</nav>
    <div id="receiver">
        <?php
        $result = mysqli_query($conn,"SELECT first_name, last_name FROM users WHERE userid = '$receiver'") or die(mysqli_error($conn));
        $row = mysqli_fetch_assoc($result);

        echo $row['first_name'];
        ?>
    </div>
       
       <div id="messages" style="overflow-y: scroll; height:450px; margin-left:10px;">
       
       </div>
      <div id="send_msg">
       <form action="message.php" method="get">
        <input name='msg_to_send' type="text" placeholder="Aa" required>
        <input type="submit" name="send" value="Send">
       </form>
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