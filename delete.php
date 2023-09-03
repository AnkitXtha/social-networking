<?php
	include("classes/autoload.php");

	$signin = new Signin();
	$user_data = $signin->check_signin($_SESSION['socialnet_userid']);

	$Post = new Post(); 

	$ERROR = "";
	if(isset($_GET['id'])){

		
		
		$ROW = $Post->get_one_post($_GET['id']);
		if(!$ROW){

			$ERROR = "No such post was found";

		}
		else{
			if($ROW['userid'] != $_SESSION['socialnet_userid']){
				$ERROR = "Access denied you cant delete this file";
			}
		}
		}else{
			$ERROR = "No such post was found";
		}
		//if sth was posted

		if($_SERVER['REQUEST_METHOD'] == "POST"){

			$Post->delete_post($_POST['postid']);
			header("Location: profile.php");
			die;

		}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
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
  <a href="notify.php"><img style="width: 30px; vertical-align:middle; height: 30px; margin-left: 125px; " src="image/notify.jpg"></a>
   <span style="color: black; size: 10px;margin-left: 50px;font-family: sans-serif;">Username</span>
  <img style="width: 40px; height: 40px; margin-left: 10px; padding-top: 0px; border-radius: 50px;  vertical-align:middle;" src="image/profile.jpeg">
  <img style="width: 30px; height: 40px; padding-top: 0px;  vertical-align:middle;" src="image/line1.jpg">
  <a href="Signin.php"><span style="color: black; size: 10px;font-family: sans-serif;">LogOut</span></a>
	</div>
	

	
	 <div style="border:1px solid white; border-radius: 25px; background-color: white;box-shadow: 5px 10px 18px #888888; display: flex;  padding: 10px;">


      <h2>Delete Post</h2>
       
       	<form method="post">
       		
       		<hr>
       		
       		<?php
				if($ERROR != ""){
				echo $ERROR;
				}

       		else{
       		 echo "Are you sure you want to delete this post?";
       			$user  = new User();
       			$ROW_USER = $user->get_user($ROW['userid']);
       		
       			include("post_delete.php");
       			

       		echo "<input  name='postid' type='hidden' value='$ROW[postid]'>";
       		echo "<input  id='post_button' type='submit' value='Delete'>";
       		}
       		?>
       		
      <br><br><br>
       		
       	</form>
     
     
      
      
    </div>

</body>
</html>