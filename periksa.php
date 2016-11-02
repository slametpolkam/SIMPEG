<?php
 include "koneksi.php";
 $nama =$_POST ["nama"];
 $email =$_POST ["email"];
 $komentar=$_POST ["komentar"];
 $query="INSERT INTO tb_contact_us (nama, email, komentar) 
 values ('$nama','$email','$komentar')";
 $hasil= mysql_query ($query);
 if ($hasil)
 {
	echo"<h1>data anda berhasil di inputkan $nama</h1>";	
  }
?>
