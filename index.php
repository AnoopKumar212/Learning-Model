<!DOCTYPE html>
<?php
	ob_start();
	$cookie_name="Learning";
	$cookie_value="/Assets/";
	setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
	ob_end_clean();
?>
<!-- The Front Page of Learning Model-->
<html>
	<title>Learning Model</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./Assets/Style/w3.css">
	<link rel="stylesheet" href="./Assets/Style/raleway.css">
	<link rel="stylesheet" href="./Assets/Style/index_custom.css">
	
	<body>
		<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
			
			<div class="w3-display-topleft w3-padding-large w3-xlarge">
				Learning Model
			</div>
		
			<div class="w3-display-middle">
				<h1 class="w3-jumbo w3-animate-top">Test 2</h1>
				<hr class="w3-border-grey" style="margin:auto;width:40%">
				<p class="w3-large w3-center"><button class="button button_signup" id="signup" onclick="window.location.href='Signup_and_Login/signup_login_form.php'"><b>Let's Go >></b></button></p>	
				<p class="w3-large w3-center"><button class="button button_signup" id="signup" onclick="window.location.href='Registered_Users_List/registered_users_list.php'"><b>Registered Users</b></button></p>	
			</div>  
		
			<div class="w3-display-bottomleft w3-padding-large">
				Powered by <a href="" target="">Tata Magic</a>
			</div>
		
		</div>
	</body>
</html>