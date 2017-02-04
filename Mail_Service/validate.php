<html><body bgcolor="#edffed">
<?php
$email=$_GET['email'];
$hash=$_GET['hash'];
mysql_connect("localhost", "root", "Cyborg@champ45") or die(mysql_error()); // Connect to database server(localhost) with username and password.
mysql_select_db("learning") or die(mysql_error()); // Select learning database.
$search = mysql_query("SELECT email, hash FROM info WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
$match  = mysql_num_rows($search);
if($match > 0){
    // We have a match, activate the account
	mysql_query("UPDATE info SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
echo '<div class="statusmsg">Your account has been activated, You can now login</div>';
echo"<div style='  margin-bottom: 15px;
      padding: 4px 12px;background-color: #ddffdd;
    border-left: 6px solid #4CAF50;'>
  <p><strong>Success!</strong> Your account has been activated, You can now login</p>
</div>
";
}
else{
    // No match -> invalid url or account has already been activated.
echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
	}
	?></html></body>