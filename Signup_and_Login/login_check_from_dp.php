<?php 
  $user=$_POST["uname"];
  $pass=$_POST["pass"];
  mysql_connect("localhost","root","Cyborg@champ45");
  mysql_select_db("learning");
  if($user=="admin" and $pass=="root")
  {
	  header("location:../Administrator/administrative.php");
	}
	  else
	  {		  
		  $check=mysql_query("select * from login where username='$user' AND pass='$pass'");
		  $count = mysql_num_rows($check);
		  if ($count==1)
		  {
			  header("location:../Profile_Update_Form/profile_update.php");
			 }
			 else
			 {
			 echo "<br>Error: " . $sql . "<br>" . mysqli_error($db);
			 }
	}			
			 	
	  ?>
