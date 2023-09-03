<?php 
    session_start();
    include("includes/connection.php");
    include("includes/functions.php");

    if(isset($_SESSION['user_name'])){
        header("Location:search.php?Logged-in");
        die;
    }

    else if($_SERVER['REQUEST_METHOD'] == "POST"){
        //on post
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $pass_enc1 = md5($password);
        $pass_enc2 = sha1($pass_enc1);
        $pass_enc3 = crypt($pass_enc2, "*#FT9$$");

       if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        //read to db

        $query = "select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query($conn, $query);

        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $pass_enc3){
                
                $_SESSION['user_name'] = $user_data['user_name'];
                $_SESSION['log_in'] = $user_data['log_in'];
                header("Location:search.php");
                die;
            }
            else{
		    echo "<script>alert('Invalid password'); window.location='login.php'</script>";
            }
        }
    }
    else{
		    echo "<script>alert('Username cannot be a number'); window.location='login.php'</script>";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="includes/style.css">
  
</head>
<body>
<div id="welcome-css">
    <p>LOGIN</p>
</div>
    <div id="box">
        <form method="post">
            <input type="text" name="user_name" placeholder="Enter username" required><br><br>
            <input type="password" name="password" placeholder="Enter password" required><br><br>
            <input type="submit" value="Login"><br><br>
            <span>Not registered!!</span><a href="signup.php">Register</a>
            <div style="margin:40px;"><a href="index.php">Go to Homepage</a></div>

        </form>
    </div>
</body>
</html>