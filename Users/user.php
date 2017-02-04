<html>
<head><title>quespage</title>
</head>
	<body background="back.jpg">
	<?php
	echo"<center><font face='algerian' size='6' color=blue>||There's Only One Correct Option For Each Question||</font><hr></center>";
	mysql_connect("localhost","root","Cyborg@champ45");
	mysql_select_db("learning");
	$res=mysql_query("select * from admin");
	$cnt=mysql_num_rows($res);
	for($j=0;$j<$cnt;$j++)
	{
	$r1=rand(1,$cnt);
	}
	for($i=0;$i<$r1;$i++)
	{
	$a1=mysql_result($res,$i,'question');
	$a2=mysql_result($res,$i,'choice1');
	$a3=mysql_result($res,$i,'choice2');
	$a4=mysql_result($res,$i,'choice3');
	$a5=mysql_result($res,$i,'choice4');
	}
	$d1=$a2;
	$d2=$a3;
	$d3=$a4;
	$d4=$a5;
	echo"<center><form name='frm1' action=answer.php method=GET>";
	echo"<table><tr><td>&nbsp;</td></tr><tr><tr><td>&nbsp;</td></tr><tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>";
	echo"<th>$a1</th><tr><td>&nbsp;</td></tr><tr><tr><td>&nbsp;</td></tr><tr>";
	echo"<tr><td><input type=radio name=t1>$d1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo"<input type=radio name=t1>$d2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo"<input type=radio name=t1>$d3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo"<input type=radio name=t1>$d4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
	echo"<tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>";
	echo"</table>";
	echo"<input type=submit value='submit'>";
	echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=reset value='cancel'>";
	$e=@$_GET[x];
			if($e==1)
			{
			 echo"<br><br><br><font color='red'>There's no negative marking!   please choose some option!</font>";
			}
	echo"<form>";
	echo"</center>";
	?>


	</body>
</html>