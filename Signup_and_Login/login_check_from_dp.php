 <?php	
	$servername = "localhost";
	$username = "root";
	$password = "Cyborg@champ45";
	$dbname = "Learning";

	// Fetching Data from the URL with POST method
	$user=$_POST['uname'];
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
	$sql = "SELECT pass FROM login where username='$user'";
	$result = $conn->query($sql);	
	if ($result->num_rows == 1) 
	{
		// output data of row
		$row = $result->fetch_assoc();
		//echo "<br/>password: " . $row["pass"]. "<br>";
		if($pass==$row["pass"])
		{
			//echo"You are right";
			header('Location:../Home/index.html');
		}		
		else
		{
			//echo"You are wrong";		
		}	
	}
	else
	{
		echo "<br/>0 results";
	}
	$conn->close();
?> 
