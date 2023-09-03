<?php 
  include('admin_login.php');
 // echo $_SESSION['mg'];
 ?>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="sign_in.css?v=<?php echo time(); ?>">
  </head>
  <body>

  	<section class="Form my-4 mx-5">
  		<div class="container">
  			<div class="row g-0">
  				<div class="col-lg-5" id="slider">
            <figure>
  					<img src="signin_slide1.jpg" class="img-fluid" alt="">
            <img src="signin_slide2.jpg" class="img-fluid" alt="">
            <img src="signin_slide1.jpg" class="img-fluid" alt="">
            <img src="signin_slide3.jpg" class="img-fluid" alt="">
            <img src="signin_slide1.jpg" class="img-fluid" alt="">
  					</figure>
  				</div>
  				<div class="col-lg-7 px-5 py-3">
            <h1 class="font-weight-bold py-3">BEAP</h1>
            <h2>Admin Login</h4>

  					<form method="POST" action="admin_login.php">

  						<div class="form-row">
  							<div class="col-lg-7">
  								<input type="text" name="adminname" placeholder="Admin_Name" class="form-control my-4 p-3">
  							</div>
  						</div>
  						<div class="form-row">
  							<div class="col-lg-7">
  								<input type="password" name="password" placeholder="Password" class="form-control my-4 p-3">
  							</div>
  						</div>
  						<div class="form-row">
  							<div class="col-lg-7">
  								<input type="submit" name="submit" value="Sign in" class="btn1 mt-3 mb-5">
  							</div>
  						</div>
  						<a href="#">Forgot Password</a>
  					</form>
            <?php

    if(isset($_SESSION["error"])){
      ?>
      <p style="color:red; margin-left: 35px;"><?=$_SESSION["error"];?></p>
      <?php unset($_SESSION["error"]);
    }?>

  				</div>
  			</div>
  		</div>
  	</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  </body>
</html>