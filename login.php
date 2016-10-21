<?php session_start(); 
 include "koneksi.php"; 
 $username=$_POST['username']; 
 $password=$_POST['password']; 
 $query=mysql_query("select * from admin where username='$username' and password='$password'"); 
 $cek=mysql_num_rows($query); 
 if($cek){ 
 $_SESSION['username']=$username; 
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
.login {
}
.login {
	text-align: center;
}
.login {
	font-weight: bold;
}
.login {
	font-style: italic;
}
.login {
	font-size: 36px;
}

</style>

 <p class="login">Anda berhasil login. silahkan menuju <a href="home.php">Halaman HOME</a>
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
	text-align: center;
}
.login {
}
.login {
	text-align: center;
}
.login {
	font-weight: bold;
}
.login {
	font-style: italic;
}
.login {
	font-size: 36px;
}
</style>
 
 <p class="login">Anda gagal login. silahkan <a href="form_admin.php">Login kembali</a>
   <?php 
 echo mysql_error(); 
 } 
 ?>
 </p> 
 