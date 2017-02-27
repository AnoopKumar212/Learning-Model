 <?php	
	$servername = "localhost";
	$username = "root";
	$password = "Cyborg@champ45";
	$dbname = "Learning";

	// Fetching Data from the URL with POST method
	$user=$_POST['uname'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
	//echo "<br/>$user<br/>$pass";
	/*After Connection Code*/
	$sql = "INSERT INTO info (username, email) VALUES ('$user','$email')";
	if ($conn->query($sql) === TRUE) 
	{
		echo "<br/>New record created successfully";
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$sql = "INSERT INTO login (username, pass) VALUES ('$user','$pass')";
	if ($conn->query($sql) === TRUE)
	{
		echo "<br/>New record created successfully";
		header("Location:../Mail_Service/verify.php?uname=$user");
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?> 
