<?php session_start();
 if(ISSET($_SESSION['username'])){
 include "koneksi.php"; 
 ?>
<style type="text/css href="p.css"">

</style>
 <h1 class="h1">isi dengan script yang dinginkan</h1>
 <input type="submit" name="logout" value="Proses" href="logout.php">
 <p class="logout"><a href="logout.php">Logout</a> 
   <?php 
 }else{ 
 ?>
 </p>
 <p class="login">Anda tidak boleh mengakses halaman ini. silahkan <a href="form_admin.php">Login 
     dahulu</a>
   <?php 
 } 
 ?>
 </p>