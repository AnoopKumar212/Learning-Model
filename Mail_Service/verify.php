<?php
mysql_connect("localhost", "root", "Cyborg@champ45") or die(mysql_error());
mysql_select_db("learning") or die(mysql_error());
$user=$_GET["uname"];
$result=mysql_query("select * from info where username='$user'");
$row = mysql_fetch_row($result);
if($row[3]==0)
{
	$email=$row[1];
	$msg = 'Your account has been made. <br /> Please verify it by clicking the activation link that has been send to your email.';
	$hash = md5( rand(0,1000) );
	mysql_query("update info set Hash='". mysql_escape_string($hash) ."' where username='$user'") or die(mysql_error());

$to      = $email; // Send email to our user
$subject = 'Signup | Verification for TATA MAGIC'; 
$message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$user.'
------------------------
 
Please click this link to activate your account:
http://pranavgupta.dynu.com/Mail_Service/validate.php?email='.$email.'&hash='.$hash.'
 
'; 
                     
$headers = 'From:noreply@pranavgupta.dynu.com' . "\r\n";
mail($to, $subject, $message, $headers);
echo"<div style=' margin-bottom: 15px;
      padding: 4px 12px;background-color: #e7f3fe;
    border-left: 6px solid #2196F3;'>
  <p><strong>Thanks for registration !</strong> A verification link has been send to your E-mail address. To go to the login page <a href='..\Signup_and_Login\signup_login_form.php'>click here</p>
</div>
";
}
else
{
	echo"<div style=' margin-bottom: 15px;
      padding: 4px 12px;background-color: #e7f3fe;
    border-left: 6px solid #2196F3;'>
  <p><strong>Sorry!</strong> There was some problem retry again.</p>
</div>
";
}
?>