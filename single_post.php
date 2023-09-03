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
  					header("Location: single_post.php?id=$_GET[id]");
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


	$post = new Post();
	
  $id = $user_data['userid'];
  $posts = $post->get_post($id);
	$ROW = false;
	$ERROR = "";
	if(isset($_GET['id'])){
		$ROW = $post->get_one_post($_GET['id']);

	}else{
		echo" $ERROR = 'No post found'";
	}
	?>


	<!DOCTYPE html>
<html>
<head>
	<title>Single Post </title>
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

  <a href="notify.php"><img style="min-width: 5vh; max-width: 10vh; vertical-align:middle; height: 30px; margin-left: 125px; " src="image/notify.jpg"></a>

   <span style="color: black; size: 10px;margin-left: 50px;font-family: sans-serif;">Username</span>

  <img style="width: 40px; height: 40px; margin-left: 10px; padding-top: 0px; border-radius: 50px;  vertical-align:middle;" src="image/profile.jpeg">

  <img style="width: 30px; height: 40px; padding-top: 0px;  vertical-align:middle;" src="image/line1.jpg">

  <a href="logout.php"><span style="color: black; size: 10px; font-family: sans-serif;">LogOut</span></a>
	</div>

	<div style="width: 800px; margin: auto; min-height: 400px; ">
		<div style="display: flex;">
			<div style="min-height: 400px; flex: 2.5; padding: 20px; padding-right: 0px; ">
				<div style="border: solid thin #aaa; padding: 10px;background-color: white;">
<?php
	

	$user = new User();
	$image_class = new Image();
	//$post = new Post();


	if($post){
		
		$ROW_USER = $user->get_user($ROW['userid']);
		$ROW = $post->get_one_post($ROW['postid']);


		include("post.php");
	}

	
	

	?>
	<br style="clear: both;">
	<div style="border: solid thin #a6a6a6; padding: 10px; background-color: white; ">

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
							
							<textarea name="post" placeholder="Post a comment" style="resize: none;"></textarea>
							<input type="hidden" name="parent" value="<?php echo $ROW["postid"]?>">
							<input type="file" name="file">
							<input type="submit" id="post_button" value="Post"><br>
						</form>
					</div>
				


					<?php

							$comments = $post->get_comments($ROW['postid']);
							if(is_array($comments)){
								foreach ($comments as $COMMENT) {
									// code...

									include("comment.php");
								}
							}
					?>





</div>

			</div>
		</div>
	</div>



</body></html>




