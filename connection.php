<?php
	$baglan = mysql_connect("localhost","root") or die (mysql_error());
	mysql_select_db("aof_bina",$baglan) or die (mysql_error());
	mysql_query("set character set utf8");
?>