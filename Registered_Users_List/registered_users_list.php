<?php
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

	// Create connection
	$conn = new mysqli('localhost','root','Cyborg@champ45','learning');
	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT username, email FROM info";
	$result = $conn->query($sql);
	echo"<style>
			body
			{
				margin:0px;
				padding:0px;
			}
			table 
			{
				border-collapse: collapse;
				width: 100%;
			}
			th, td 
			{
				text-align: left;
				padding: 8px;
			}
			tr:nth-child(even)
			{
				background-color: #f2f2f2
			}
			th 
			{
				background-color: #4CAF50;
				color: white;
			}
		</style>";
	
	echo"
		<body>
			<table border='1'>
				<tr>
					<th><b>Username</b></th>
					<th><b>E-mail</b></th>
				</tr>";
				if ($result->num_rows > 0) 
				{
					// output data of each row
					while($row = $result->fetch_assoc()) 
					{
						echo "<tr><td>" . $row["username"]. "</td><td>" . $row["email"]. "</td></tr>";
					}
				}
				else 
				{
					echo "0 results";
				}
	echo"
			</table>
		</body>";
	$conn->close();
?>