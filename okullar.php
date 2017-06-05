<?php
include("connection.php");

	$ilceId = $_POST['ilceId'];
	$rev = '';
	
	$query = mysql_query('select * from okullar where ILCE_ID="'.$ilceId.'"');
	while($okul = mysql_fetch_array($query)){
		$rev.='<option value="'.$okul['ID'].'">'.$okul['ADI'].'</option>';
	}
	
	echo $rev;
?>