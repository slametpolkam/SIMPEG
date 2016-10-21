<?php session_start();
if(ISSET($_SESSION['username'])){
include "koneksi.php"; 
?>
<style type="text/css">
body {
	background-image: url(gambar/rainbaow.jpeg);
	background-repeat: no-repeat;
	margin-left: 100px;
	margin-top: 100px;
	margin-right: 100px;
	margin-bottom: 200px;
	text-align: center;
}
.sambutan {
	text-align: center;
}
.sambutan {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-weight: bold;
	font-style: italic;
	font-size: 36px;
}
.logout {
	text-align: center;
	font-weight: bold;
}

</style>
<p class="sambutan">Selamat datang di ruangan sederhana ini </p>
<p class="sambutan">&nbsp;</p>
<p class="logout">Untuk logout klik bola di bawah ini </p>
<p class="logout"><a href="logout.php"><img src="gambar/instansi-logo.png" width="144" height="153"></a></p>
<p>
  <?php 
}else{ 
?>
  <style type="text/css">
body {
	background-image: url(gambar/rainbaow.jpeg);
	background-repeat: no-repeat;
	margin-left: 100px;
	margin-top: 100px;
	margin-right: 100px;
	margin-bottom: 200px;
}

.block {
	font-weight: bold;
	font-style: italic;
	font-size: 36px;
}
.block {
	text-align: center;
}

  </style>
<span class="block"> <span class="block">Anda tidak boleh mengakses halaman ini. silahkan klik tombol dibawah ini untuk melanjutkan</a></span></span>
<p> </span></p>
<p><a href="form_admin.php"><img src="gambar/DISHUB.png" width="157" height="163"></a></p>
  <span class="block">
  <?php 
} 
?>
  
