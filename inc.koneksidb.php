<?php
$db_host= "localhost";
$db_user= "root";
$db_pass= "";
$db_data="politeknik_kampar";
$no='';
	$koneksi= mysql_connect($db_host,$db_user,$db_pass)
					or die ("koneksi gagal".mysql_error());
mysql_select_db($db_data,$koneksi)
or die ("Baca DB gagal".mysql_error());
?>
