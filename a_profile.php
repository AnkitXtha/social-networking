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


  			$allowed_size = (1024 * 1024) * 3;
  			if($_FILES['file']['size'] < $allowed_size)
  			{
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
		  	}else{
		  			echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
		      		echo "<br>The following errors occured <br><br>";
		     		echo "Only images of size 3Mb or lower are allowed!";
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
		<link rel="stylesheet" type="text/css" href="sns/adminmain.css?v=<?php echo time(); ?>">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body> 
<div class="top">
		<ul>
			<li><a href="sns/adminmain.php">Dashboard</a></li>
			<li><a href="sns/admin_post.php">Posts</a></li>
			<li><a href="sns/admin_comment.php">Comments</a></li>
			<li><a href="sns/sign_in.php">Logout</a></li>
		</ul>
	</div>   
    <div id="post_bar" style=" width: 100vh; position: absolute; top: 50%; left: 50%;transform: translate(-50%, -30%);"> 
    
			<div class="main1" >

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
				<div class="photo"><img src="<?php echo $image ?>" style="width: 150px; height: 150px;margin-left: 250px;  margin-top: 80px; border-radius: 100px;"></div><br>
				<span style="text-align: center; font-size: 25px; "><div class="setting"><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?><br>
				</div></span>
				
			</div>

			<div class="main2">
				<?php
					 
							$myfollows = $user_data['follows'];
					
				?>
				<div class="follower"><?php  echo "$myfollows followers"; ?></div>
				<div class="following">
				
				</div>
				<div class="posti">0 posts</div>
				
			</div>
					<div class="men" style="border: 1px solid black; display: flex; align-items: center;">
			<a href="profile_content_following.php"><div class="followers" >Followers</div></a>
			<a href="#"><div class="followings">Following</div></a>
			
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

							include("a_post.php");
						}
					}
						
				?>				
					
					</div>
				</div>
			</span></div></div>
</body>
</html>