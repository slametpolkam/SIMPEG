<?php

$db_host="localhost";
$db_user="root";
$db_pass="";
$db_data="Politeknik_kampar";
$koneksi=mysql_connect($db_host,$db_user,$db_pass)
						or die("koneksi gagal".mysql_error());
	mysql_select_db($db_data,$koneksi)
			or die("Baca DB gagal".mysql_error());
				
	#baca form(if register global on)
$daftar=$_REQUEST["daftar"];
$TxtUid=$_REQUEST["TxtUid"];
$TxtPass=$_REQUEST["TxtPass"];
$TxtPass2=$_REQUEST["TxtPass2"];
$TxtNamaA=$_REQUEST["TxtNamaA"];
$TxtNamaB=$_REQUEST["TxtNamaB"];
$RbKelamin=$_REQUEST["RbKelamin"];
$TxtAlamat=$_REQUEST["TxtAlamat"];
$TxtEmail=$_REQUEST["TxtEmail"];
$TxtTelepon=$_REQUEST["TxtTelepon"];
#validasi form
if(strlen(trim($TxtPass))<=5){
		echo"password harus diisi minimal 6 digit,ulang kembali";
		include "pendaftaran.php";
}
		else if (strlen(trim($TxtPass2))<=5){
		echo"password harus diisi minimal 6 digit,ulang kembali";
		include "pendaftaran.php";
}
else if (trim($TxtPass)!=trim($TxtPass2)){
	echo"password harus diisi minimal 6 digit,ulang kembali";
	include "pendaftaran.php";
}
else if(trim($TxtNamaA)==""){
	echo"Nama ulang kembali";
	include "pendaftaran.php";
}
else if(trim($TxtNamaB)==""){
	echo"Namab ulang kembali";
	include "pendaftaran.php";
}
else if(trim($TxtAlamat)==""){
	echo "Alamat tidak boleh kosong";
	include "pendaftaran.php";
}
else if(trim($TxtEmail)==""){
	echo "Email tidak boleh kosong";
	include "pendaftaran.php";
}
else if(trim($TxtTelepon)==""){
	echo "Telepon tidak boleh kosong";
	include "pendaftaran.php";
}
else{
	$TxtUid=strtolower($TxtUid);
	$sql_cek="select*from anggota where User_id='$TxtUid'";
	$qry_cek=mysql_query($sql_cek,$koneksi);
	$jum_cek=mysql_num_rows($qry_cek);
	if($jum_cek>=1){
		echo "User id :<b>$TxtUid</b>sudah ada";
		echo "<br>SILAHKAN GUNAKAN YANG LAIn";
		include "pendaftaran.php";
		exit;
}
/*$sql="INSERT INTO anggota(User_id,User_psw,Nama,Jenis_kelamin,Alamat,Email,Telpon,Tgl_daftar)
			values('$TxtUid',password('$TxtPass'),
			'$TxtNamaA $TxtNamaB','$RbKelamin',
			'$TxtAlamat',$TxtEmail',$TxtTelpon',NOW())";
			*/
	$sql="insert into anggota SET
						id_daftar='$daftar',
						user_id='$TxtUid',
						User_psw='$TxtPass',
						Nama='$TxtNamaA $TxtNamaB',
						Kelamin='$RbKelamin',
						Email='$TxtEmail',
						Alamat='$TxtAlamat',
						Telepon='$TxtTelepon',
						Foto='IMG_15',
						Profil='',
						Tgl_daftar=NOW()";
		mysql_query($sql,$koneksi)
			or die("sql error:".mysql_error());
			echo" PROSES PENDAFTARAN SUKSES, DATA SUDAH MASUK ";
}
?>