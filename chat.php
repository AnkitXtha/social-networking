

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="home.css?v=<?php echo time(); ?>">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<div class="div1">
		<a href="#"><div class="home" > <i class="fa fa-home"></i>Home</div></a>
		<a href="profile.php"><div class="profile" ><i class="fa fa-user"></i>Profile</div></a>
		<a href="userlist.php"><div class="message"><i class="fa fa-envelope"></i>Messages</div></a>
		<a href="#"><div class="logout"><i class="fa fa-sign-out"></i>Logout</div></a>
	</div>

	<div class="div2">
		<div class="home">
			<b>Home</b>
			 <i class="fa fa-moon-o"></i>
		</div>

		<div class="post">
			yeta whats on your mind 
		</div>

		<div class="feed">
			yeta feed 

		</div>
	</div>

	<div class="div3">
		<div class="search-container">
			<form>
				<input type="text" name="search" placeholder="search..." id="search">
				<button type="submit"><i class="fas fa-search"></i></button>
			</form>
		</div>
		
			<section class="chat-area">
				<header>
					<a href="#"> <i class="fa fa-arrow-left"></i></a>
					
						<img src="img.php" alt="">
						<div class="details">
					
						<span>Profile name</span>
						<p>Active Now</p>
					</div>
				
				</header>
				<div class="chat-box">
					<div class="chat outgoing">
						<div class="details">
							<p>hello this is first test message  haii</p>
						</div>
					</div>
					<div class="chat incoming">
						<img src="img.jpg" alt="">
						<div class="details">
							<p>hello this is seconddddddd test message  haii ksjcccbsdbcsdcb</p>
						</div>
					</div>
				</div>
			</section>
	</div>
</body>
</html>