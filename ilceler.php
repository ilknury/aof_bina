<?php
include("connection.php");

	$ilId = $_POST['ilId'];
	$rv = '';
	
	$query = mysql_query('select * from ilceler where IL_ID="'.$ilId.'"');
	while($ilce = mysql_fetch_array($query)){
		$rv.='<option value="'.$ilce['ID'].'">'.$ilce['ADI'].'</option>';
	}
	
	echo $rv;
?>