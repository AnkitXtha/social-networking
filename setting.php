<?php

	include("classes/autoload.php");

	$signin = new Signin();
	$user_data = $signin->check_signin($_SESSION['socialnet_userid']);
?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	include("header.php");
	?>

	<table align="center" style="margin-top: 100px; max-width: 300px; max-height: 400px; background-color: white; padding: 50px;">
		<tr>
			<td><a href="password.php">Password Change</a></td>
		</tr>
	</table>




</body>
</html>
