<?php  
         $user=$_POST["uname"];
		 $email=$_POST["email"];		 
		 $pass=$_POST["pass"];
		 
		 $db = mysqli_connect('localhost','root','Cyborg@champ45','learning')
               or die('Error connecting to MySQL server.');
			   
			   if (!$db) 
			       {
                     die("Connection failed: " . mysqli_connect_error());
                   }              
		    $sql = "INSERT INTO info (username,email)
                VALUES ('$user','$email')";				
         if (mysqli_query($db, $sql))
         		  {
                   // echo "<center>Info Table updated</center></br></br>";
				  }
 		else  
		     {
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
             }
			 
			  $sql = "INSERT INTO login (username,pass)
                VALUES ('$user','$pass')";

			 if (mysqli_query($db, $sql))
         		  {
                    //echo "<center>Login Table Updated</center>";
				  }
 		else  
		     {
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
             }
			 header("location:../Mail_Service/verify.php?uname=$user");
		mysqli_close($db);    
	  ?>
