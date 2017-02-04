<html>
  <head>
	<title>Administrative's page</title>
  </head>

 <body bgcolor="AA22FF"><center>
 <font color="yellow" size='7'>Welcome To Administrative Page</font>
 	<form name=frm1 method=GET action=question.php>
 	<table align='center'>
	<tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
 	<tr><td><font face=Arial Black color="white" size="5"><b>Please Upload Your Question here</b></font></td></tr>
 	<tr><td><textarea name=t1 rows='7' cols='50'></textarea></td></tr>
 	<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>

 	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face=Arial Black color="white" size="3"><b>Choice 1</b></font>
 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face=Arial Black color="white" size="3"><b>Choice 2</b></font>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face=Arial Black color="white" size="3"><b>Choice 3</b></font>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face=Arial Black color="white" size="3"><b>Choice 4</b></font></td></tr>
	<tr><td>
	<input type="radio" name="answer" value="1"/><input type=text name=t2 size='8'>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="answer" value="2"/><input type=text name=t3 size='8'>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="answer" value="3"/><input type=text name=t4 size='8'>&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" name="answer" value="4"/><input type=text name=t5 size='8'></td></tr>
	<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td><center><input type=submit value='Upload'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=reset value='cancel'></center></td></tr>
	<?php
	$a7=@$_GET[x];
	$a8=@$_GET[x];
	if($a7==1)
	{
	   echo"<font color='white' size='5'>please fill all the enteries";
	}
	elseif($a8==2)
	{
		echo"<font color='white' size='5'>QUESTION UPLOADED SUCCESSFULLY! ";
	}
	?>
	</form>
 </center>
 </body>
</html>
