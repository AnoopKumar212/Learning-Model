<?php
$a1=@$_GET[t1];
$a2=@$_GET[t2];
$a3=@$_GET[t3];
$a4=@$_GET[t4];
$a5=@$_GET[t5];
$a6=@$_GET[answer];

mysql_connect("localhost","root","Cyborg@champ45");
mysql_select_db("learning");
if($a1!=null and $a2!=null and $a3!=null and $a4!=null and $a5!=null and $a6!=null)
{
 mysql_query("insert into admin values('$a1','$a2','$a3','$a4','$a5','$a6')");
 header("location:administrative.php?x=2");
}
else
{
header("location:administrative.php?x=1");
}
?>