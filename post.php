<div id="post">
				<div>
					<?php

						$image = "images/user_male.jpg";
						if($ROW_USER['gender'] == "Female")
						{
							$image = "images/user_female.jpg";
						}

						if(file_exists($ROW_USER['profile_image']))
						{
							$image = $image_class->get_thumb_profile($ROW_USER['profile_image']);
						}
					?>
					<img src="<?php echo $image ?>" style="width: 75px; margin-right: 4px; border-radius: 50%;">
				</div>
					<div>
						<div style="font-weight: bold; color: #a6a6a6;"><a href="profile.php?id=<?php echo $ROW_USER['userid']; ?>" style="text-decoration: none;"><?php echo htmlspecialchars($ROW_USER['first_name']) . " " . htmlspecialchars($ROW_USER['last_name']); ?></a>

							<?php
							if($ROW['is_profile_image'])
							{
								$pronoun = "his";
								if($ROW_USER['gender'] == "Female")
								{
									$pronoun = "her";
								}
								echo "<span style='font-weight:normal; color:#aaa;'> changed $pronoun profile picture </span>";
							}

							if($ROW['is_cover_image'])
							{
								$pronoun = "his";
								if($ROW_USER['gender'] == "Female")
								{
									$pronoun = "her";
								}
								echo "<span style='font-weight:normal; color:#aaa;'> changed $pronoun cover picture </span>";
							}
							
							?>

						</div>

							<?php echo htmlspecialchars($ROW['post']);  ?>
							<br><br>

							<?php 
								if(file_exists($ROW['image']))
								{
									
									$post_image = $image_class->get_thumb_post($ROW['image']);
									echo "<img src='$post_image' style='width:80%;' />"; 
								}
								 
							?>
							<br/><br><br/>
							<?php
							$likes = "";
							$likes = ($ROW['likes'] > 0) ? "(" .$ROW['likes']. ")" : "" ;
							?>
							
							<a href="like.php?type=post&id=<?php echo $ROW['postid'] ?>" style="text-decoration: none;">Like<?php echo $likes ?></a> . 
							<a href="single_post.php?id=<?php echo $ROW['postid'] ?>" style="text-decoration: none;">Comment</a> . <span style="color: #999;"><?php echo $ROW['date']  ?></span> 

							

							<span style="color: #999; float: right; margin-left: 300px;"> 
								<?php 
								$post = new Post();

								if ($post->i_own_post($ROW['postid'],$_SESSION['socialnet_userid'])) {
									echo" <a href='edit.php'> Edit </a> . <a href='delete.php?id=$ROW[postid]'>Delete </a>";
								}

								
								
								?>

								</span>
								<?php

									$i_liked = true;

								if (isset($_SESSION['socialnet_userid'])) {
									// code...
								
									$DB = new Database();
									
								$sql = " select likes from likes  where type ='post' &&  contentid = '$ROW[postid]' limit 1";
								$result = $DB->read($sql);
								if(is_array($result)){
									$likes = json_decode($result[0]['likes'],true);
									$user_ids = array_column($likes, "userid");

									if(!in_array($_SESSION['socialnet_userid'], $user_ids)){

										$i_liked = false;

									}
								}
							}



								if($ROW['likes'] > 0){

									echo "<br/>";
									if($ROW['likes'] == 1){

										if($i_liked){
									echo"<div style='float:left;'>You liked this post </div>";}

										else{

									echo"<div style='float:left;'> 1 person like this post </div>";}}
									else{
										if($i_liked){
									echo"<div style='float:left;'> You and " . ($ROW['likes'] - 1) . " other like this post </div>";}
									else{

									echo"<div style='float:left;'>" . $ROW['likes'] . " people like this post </div> ";}}
								}
								?>
						</div>
					</div>
					<br>
					<hr style="color: #999;">