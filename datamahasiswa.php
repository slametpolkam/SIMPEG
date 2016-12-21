<html>
	<head>
		<title> DATA MAHASISWA </title>
	</head>
	
	<body>
	<strong><center><H1>KETERANGAN DATA DIRI PEGAWAI</H1></CENTER></strong>
					<br>
					<hr align="center" width="70%" size="4" color="black"/>
					<br>
					<br><img src="IMG_15.jpg" alt="IMG_15" width="10%" height="30%" hspace="200" vspace="20" align="right"/>
					<tr>
		<table width = "500" border = "0" align = "center" cellpadding = "2" cellspacing = "1">
		<td> </td>
		<tr align = "right" bgcolor = #00FF00">
			<td colspan = "5"><center> Daftar Nama Anda </td>
			
		<?php
		include "inc.koneksidb.php";
		
		$sql = "select * from anggota order by Nama";
		$qry = mysql_query ($sql,$koneksi)
				or die ("SQL Error: ".mysql_error());
		while ($data = mysql_fetch_array($qry)){
		$no++;
		?>
		
			<tr>
			<tr align = "left" bgcolor = "#d5edb3">
				<td width = "130"><b><font face = "comic sans MS" size = "2"> Nama </font></b></td>
				<td width = "677"><font face = "comic sans MS" size = "2">:<?php echo $data ['Nama'];?></font> </td>
			</tr>
			
			<tr>
			<tr align = "left" bgcolor = "#d5edb3">
				<td valign = "top"><b><font face = "comic sans MS" size = "2"> Jenis Kelamin </font></b></td>
				<td font face = "comic sans MS" size = "2">:<?php echo $data ['Kelamin'];?></font> </td>
			</tr>
			
			<tr>
			<tr align = "left" bgcolor = "#d5edb3">
				<td valign = "top"><b><font face = "comic sans MS" size = "2"> Alamat </font></b></td>
				<td font face = "comic sans MS" size = "2">:<?php echo $data ['Alamat'];?></font> </td>
			</tr>
		
			<tr>
			<tr align = "left" bgcolor = "#d5edb3">
				<td valign = "top"><b><font face = "comic sans MS" size = "2"> Email </font></b></td>
				<td font face = "comic sans MS" size = "2">:<?php echo $data ['Email'];?></font> </td>
			</tr>
			
			<tr>
			<tr align = "left" bgcolor = "#d5edb3">
				<td valign = "top"><b><font face = "comic sans MS" size = "2"> Telepon </font></b></td>
				<td font face = "comic sans MS" size = "2">:<?php echo $data ['Telepon'];?></font> </td>
			</tr>
			
			<td colspan = "2">&nbsp;</td>
			</tr>
			<?php
			}
			?>
		</table>
	</body>
</html>
			&nbsp;</td>
			<td>&nbsp;</td>
			</tr>
			</table>
			<!--end imageready slices-->
			</body>
			</html>
	