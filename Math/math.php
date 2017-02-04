<head>
<head>
<title>
ques page</title>
</head>
<body background ='math.jpg'>
<center>
	<form name=frm1 action=quescheck.php method=GET>
	<table>
	<tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
	<tr><td><font color='yellow'>Enter First NO.</td><td></font><input type=text size='5' name=t1></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td><font color='yellow'>Enter The Operator</td><td></font><input type=text size='5' name=t2></td></tr>
	<tr><td>&nbsp;</td></tr><tr>
	<tr><td><font color='yellow'>Enter Second NO.</td><td></font><input type=text size='5' name=t3></td></tr>
	<tr><td>&nbsp;</td></tr><tr><tr><td>&nbsp;</td></tr><tr>
	<tr><td><font color='yellow'>Enter The Result</td><td></font><input type=text size='5' name=t4></td></tr>	
	</table>
	<br><br><input type=submit value='submit'>&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;<input type=reset value='cancel'>
	<?php
	$e=@$_GET[x];
	
	if($e==1)
	{
		echo"<br><br>Values Inserted!";
	}
	?>
	</form>
</center></body>
</html>