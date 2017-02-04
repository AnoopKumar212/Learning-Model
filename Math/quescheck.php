<?php
$a1=@$_GET[t1];
$a2=@$_GET[t2];
$a3=@$_GET[t3];
$a4=@$_GET[t4];
mysql_connect("localhost","root","Cyborg@champ45");
mysql_select_db("learning");
mysql_query("insert into math values('$a1','$a3','$a2','$a4')");
header("location:math.php?x=1");
?>