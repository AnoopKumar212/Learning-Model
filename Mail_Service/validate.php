<html>
	<body bgcolor="#edffed">
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

		$email=$_GET['email'];
		$hash=$_GET['hash'];

		$sql = "SELECT email, hash FROM info WHERE email='".$email."' AND hash='".$hash."' AND active='0'";
		$result = $conn->query($sql);	
		if ($result->num_rows == 1)
		{
			$conn->query("UPDATE info SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'");
			?>
				<div style="margin-bottom: 15px;padding: 4px 12px;background-color: #ddffdd;border-left: 6px solid #4CAF50;">
					<p><strong>Success!</strong> Your account has been activated, You can now login</p>
				</div>
			<?php
		}
		else
		{
			?>
				<div style="margin-bottom: 15px;padding: 4px 12px;background-color: #ddffdd;border-left: 6px solid #4CAF50;">
					<p><strong>Failure!</strong> The url is either invalid or you already have activated your account.</p>
				</div>
			<?php			
		}
	$conn->close();
	?>
	</body>
</html>
