<?php

	include("classes/autoload.php");

	$signin = new Signin();
	$user_data = $signin->check_signin($_SESSION['socialnet_userid']);

	$USER = $user_data;

	if(isset($_GET['id']) && is_numeric($_GET['id']))
	{
		$profile = new Profile();
		$profile_data = $profile->get_profile($_GET['id']);

		if(is_array($profile_data)){
			$user_data = $profile_data[0];
		}
	}


  //posting starts here

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
  	$post = new Post();
  	$id = $_SESSION['socialnet_userid'];

  			
  				$result = $post->create_post($id, $_POST, $_FILES);
			
				if($result == "")
  				{
  					header("Location: home.php");
  					die;
  				}else
  				{
			  		echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
			      	echo "<br>The following errors occured <br><br>";
			     	echo $result;
			     	echo "</div>";
			  	}
		  	
  	}

  //collect posts
  $post = new Post();
  $id = $_SESSION['socialnet_userid'];
  $posts = $post->get_post($id);

  //collect friends
  $user = new USER();

  $friends = $user->get_friends($id);

  $image_class = new Image();

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css?v=<?php echo time(); ?>">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<body>
	<form method="get" action="search.php">
	<div class="navig">
		<span style="
  padding-top: 0px;
  padding-left: 40px;
  font-size: 40px;

  background: -webkit-linear-gradient(#000000, #ac0724);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-family: Optima, sans-serif;text-shadow: 5px 10px 18px black; vertical-align:middle;">BEAP</span> 
  <a href="home.php"><img style="vertical-align:middle; width: 30px; height: 30px; margin-left: 80px; padding-top: 0px;" src="image/home1.png"></a>
  <span style="color: black; size: 10px;margin-left: 60px;font-family: sans-serif;border: 0px solid black; border-radius: 25px; padding-top: 7px; padding-bottom: 7px; padding-right: 30px; padding-left: 30px; background-color: #a7adb9;  vertical-align:middle;">Feed</span>

  <input type="text" placeholder="Search...." id="search_box" >
</form>

  <a href="notify.php"><img src="image/notify.jpg" style="width: 40px; vertical-align:middle; height: 30px; margin-left: 85px;"></a>

  <a href="profile.php"><span style="color: black; size: 10px;margin-left: 50px;font-family: sans-serif;"><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></span></a>

<?php

						$image = "images/user_male.jpg";
						if($user_data['gender'] == "Female")
						{
							$image = "images/user_female.jpg";
						}else if(file_exists($user_data['profile_image']))
						{
							$image = $user_data['profile_image'];
						}

						?>
  <img style="width: 40px; height: 40px; margin-left: 10px; padding-top: 0px; border-radius: 50px;  vertical-align:middle;" src="<?php echo $image ?>">

  <img style="width: 30px; height: 40px; padding-top: 0px;  vertical-align:middle;" src="image/line1.jpg">

  <a href="logout.php"><span style="color: black; size: 10px; font-family: sans-serif;">LogOut</span></a>
	</div>
	
<div class="main" style = "display: flex;">
	<div  style="flex: 1;  " class="menu">
   <div class="sidebar">
      <a href="home.php">
        <div class="home">
       <div class="image"><img style="height: 70px;margin-top: 13px; margin-left:  13px; width: 60px; border-radius: 30px;" src="image/home.jpg"></div>
       <div class="text"> Home</div>
      </div>
    </a>
    <a href="profile.php">
        <div class="profile">
       <div class="image"><img style="height: 70px;margin-top: 13px; margin-left:  13px; width: 60px; border-radius: 30px;" src="image/profile.jpg"></div>
       <div class="text"> Profile</div>
      </div>
    </a>
    <a href="chat/search.php">
        <div class="chat">
       <div class="image"><img style="height: 70px;margin-top: 13px; margin-left:  13px; width: 60px; border-radius: 30px;" src="image/chat.jpg"></div>
       <div class="text"> Chat</div>
      </div>
    </a>
    
    <a href="setting.php">
        <div class="khec">
       <div class="image"><img style="height: 66px;margin-top: 17px; margin-left:  13px; width: 60px; border-radius: 30px;" src="images/setting.png"></div>
       <div class="text">Setting</div>
      </div>
    </a>
    </div> 
  </div>
  <div style="flex: 3; " class="post">
    <div style="  border:1px solid white; border-radius: 25px; max-height: 100px;  padding: 10px;">

	<form method="post" enctype="multipart/form-data">
							<?php

							$image = "images/user_male.jpg";
							if($user_data['gender'] == "Female")
							{
								$image = "images/user_female.jpg";
							}else if(file_exists($user_data['profile_image']))
							{
								$image = $user_data['profile_image'];
							}

							?>
							<img id="user_img" style="width: 60px; height:60px; border-radius: 50%;margin-left: 10px; margin-right: 20px; margin-top: 10px;" src="<?php echo $image ?>">
							<textarea name="post" placeholder="What's on your mind?" style="resize: none;"></textarea>
							<input type="file" name="file" accept="image/png, image/jpeg">
							<input type="submit" id="post_button" name="" value="Post"><br>
						</form>
      <br><br><br>
      
    </div>
    <div id="post_bar"> 
      

		<!-- posts -->
		<div class="feed">
			

						<?php

							$DB = new Database();
							$user_class = new User();
							$image_class = new Image();

							$followers = $user_class->get_following($_SESSION['socialnet_userid'], "user");

							$follower_ids = false;
							if(is_array($followers))
							{
								$follower_ids = array_column($followers, "userid");
								$follower_ids = implode("','", $follower_ids);
							}

							if($follower_ids){
								$myuserid = $_SESSION['socialnet_userid'];
								$sql = "select * from posts where userid = '$myuserid' || userid in('" .$follower_ids. "') order by id desc limit 30";
								$posts = $DB->read($sql);
							}
							if($posts)
							{
								foreach ($posts as $ROW) {
									# code...
									$user = new User();
									$ROW_USER = $user->get_user($ROW['userid']);

									include("post.php");
								}
							}
					
					

						?>
					</div>

		</div>
	
        </div>
       
					

	
	
	<div style="flex: 1; width: 100px; " class="friend"  > <div class="div2"><div class="chatbox">
			<div id="friends_bar">
					Suggestions<br>

					<?php

					if($friends)
					{
						foreach ($friends as $FRIEND_ROW) {
							# code...

							include("user.php");
							echo "<br><br><hr>";
							
						}
					}

				?>
				
		</div></div></div>
	</div>

</body>
</html>
