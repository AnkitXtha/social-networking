<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css?v=<?php echo time(); ?>">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
  <span style="color: black; size: 10px;margin-left: 60px;font-family: sans-serif;border: 0px solid black; border-radius: 25px; padding-top: 7px; padding-bottom: 7px; padding-right: 30px; padding-left: 30px; background-color: #a7adb9;  vertical-align:middle;">Feed</span>

  <input type="text" placeholder="Search...." id="search_box" >

  <a href="notify.php"><img style="min-width: 5vh; max-width: 10vh; vertical-align:middle; height: 30px; margin-left: 125px; " src="image/notify.jpg"></a>

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
</body></head></html>