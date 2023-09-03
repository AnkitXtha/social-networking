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
  					header("Location: profile.php");
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
  $id = $user_data['userid'];
  $posts = $post->get_post($id);

  //collect friends
  $user = new USER();

  $friends = $user->get_friends($id);

  $image_class = new Image();

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="profile.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" type="text/css" href="main.css?v=<?php echo time(); ?>">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
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
  <span style="color: black; size: 10px;margin-left: 60px;font-family: sans-serif;border: 0px solid black; border-radius: 25px; padding-top: 7px; padding-bottom: 7px; padding-right: 30px; padding-left: 30px; background-color: #a7adb9;  vertical-align:middle;">Profile</span>

  <input type="text" placeholder="Search...." id="search_box" >

  <a href="notify.php"><img style="min-width: 5vh; max-width: 10vh; vertical-align:middle; height: 30px; margin-left: 70px; " src="image/notify.jpg"></a>

   <span style="color: black; size: 10px;margin-left: 50px;font-family: sans-serif;"><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></span>

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
	
		
<div class="main" style="display: flex;">
	<div  style="flex: 1;  " class="menu">
   <div class="sidebar">
      <a href="home.php">
        <div class="home">
       <div class="image"><img style="height: 100px; width: 60px; border-radius: 30px;" src="image/home.jpg"></div>
       <div class="text"> Home</div>
      </div>
    </a>
    <a href="profile.php">
        <div class="profile">
       <div class="image"><img style="height: 100px; width: 60px; border-radius: 30px;" src="image/profile.jpg"></div>
       <div class="text"> Profile</div>
      </div>
    </a>
    <a href="chat/search.php">
        <div class="chat">
       <div class="image"><img style="height: 100px; width: 60px; border-radius: 30px;" src="image/chat.jpg"></div>
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
  	<div style="flex: 3; " class="mid">
   

 
      <br><br><br>
      
    
    <div id="post_bar"> 
    
			<div class="main1">

				<?php

						$image = "images/user_male.jpg";
						if($user_data['gender'] == "Female")
						{
							$image = "images/user_female.jpg";
						}else if(file_exists($user_data['profile_image']))
						{
							$image = $image_class->get_thumb_profile($user_data['profile_image']);
						}

					?>
				<div class="photo"><img src="<?php echo $image ?>" style="width: 150px; height: 150px; margin-left: 240px; margin-top: 80px; border-radius: 100px;"></div><br>
				<span style="text-align: center; font-size: 25px; "><div class="setting"><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?><br>
				<a href="change_profile_image.php?change=profile" style="font-size: 12px;">change profile picture</a> | <a href="change_profile_image.php?change=cover" style="font-size: 12px;">change cover picture</a></div></span>
				
			</div>

			<div class="main2">
				<?php
					 
							$myfollows = $user_data['follows'];
					
				?>
				<div class="follower"><?php  echo "$myfollows followers"; ?></div>
				<div class="following">
				
				</div>
				<div class="posti">0 posts</div>
				<form>
					<?php
						$myfollows = "";
						if($user_data['follows'] > 0)
						{
							$myfollows = "(Followed)";
						}
						
						if($user_data['userid'] == $_SESSION['socialnet_userid']){

								$totalfollows = "(" . $user_data['follows'] . ")";
								echo "<span style= 'font-size: 14px; color: purple;'>Followers$totalfollows</span>";
							
						}else{
							echo "<a href='follow.php?type=user&id=$user_data[userid]'><input type='button' name='follow' value='Follow $myfollows' id='follow'></a>";
						}
					?>
					
				</form>
			</div>
					<div class="men">
			<a href="profile_content_followers.php"><div class="followers">Followers</div></a>
			<a href="profile_content_following.php"><div class="followings">Following</div></a>
			<div class="posts" >
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
						<img id="user_img" src="<?php echo $image ?>" style= "width: 45px; height: 45px; border-radius: 4px;">
						<textarea name="post" placeholder="What's on your mind?" style="resize: none; max-width: 100vh; max-height: 100vh; min-width: 98%; min-height: 45px; border-radius: 10px;"></textarea>
						<input type="file" name="file" accept="image/png, image/jpeg">
						<input type="submit" id="post_button" name="" value="Post" style="width: 100%; height: 30px;"><br>
				</form>
			</div>
		</div>

			<div class="main3">
				<!--posts-->
					<div id="post_bar" >

						<?php

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
			</span></div></div>
					

          
  
  <div style="flex: 1; width: 100px; " class="friend"  > 
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

				</div>
		</div>


</div>
	

	


</body>
</html>