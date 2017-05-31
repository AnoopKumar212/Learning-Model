<?php
	$servername = "localhost";
	$username = "root";
	$password = "Cyborg@champ45";
	$dbname = "Learning";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	$user=$_GET["uname"];
	$sql = "SELECT email FROM info where username='$user'";
	$result = $conn->query($sql);	
	$row=$result->fetch_assoc();
	$email=$row["email"];
	//echo"$user";
	//echo"$email";
	$hash = md5( rand(0,1000) );
	$sql = "UPDATE info set hash='$hash' where username='$user'";
	if ($conn->query($sql) === TRUE) 
	{
		//echo "Hash has been generated";
	}
	else 
	{
		//echo "Error: " . $sql . "<br>" . $conn->error;
	}	
	$to      = $email; // Send email to our user
	$subject = 'Verify your Account';
	$headers = 'Learning Model' . "\r\n"; 
	$message = '
	 
	Thanks for registering with LEARNING MODEL.Your account has been made. You can login with the following credentials after you have activated your account by pressing the url below.
	 
	------------------------
	Username: '.$user.'
	------------------------
		 
	Please click this link or copy this link to your browser to activate your account:
	https://learning-model.tk/Mail_Service/validate.php?email='.$email.'&hash='.$hash;
	mail($to, $subject, $message, $headers);
	?>
		<div style="margin-bottom: 15px;padding: 4px 12px;background-color: #e7f3fe;border-left: 6px solid #2196F3;">
		<p><strong>Thanks for registration !</strong> A verification link has been send to your E-mail address. To go to the login page <a href='../Signup_and_Login/signup_login_form.php'>click here</p>
		</div>
	<?php
	
	$conn->close();
	?>
