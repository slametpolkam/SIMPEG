<html>
<head>
<title>Form pendaftaran anggota</title>
</head>
<body>
<form action="pendaftaransim.php"method="post" name="form1" target="_self">
	<table width="400" border="0" cellpadding="2" cellspacing="1">
		<tr align="center" bgcolor="#CCFF66">
			<td colspan="2"><b>Form pendaftaran anggota baru</b></td>
		</tr>
		<tr>
			<td width="121" align="right">user_id:</td>
			<td width="268"> <input name="TxtUid" type="text" value="" size="25" maxlength="30"> </td>
		</tr>
		<tr>
			<td align="right">id_daftar:</td>
			<td><input name="daftar" type="text" size="25" maxlength="30"></td>
		</tr>
		<tr>
			<td align="right">Password:</td>
			<td><input name="TxtPass" type="Password" size="25" maxlength="30"></td>
		</tr>
		<tr>
		<td align="right">Ulangi Password:</td>
			<td><input name="TxtPass2" type="Password" size="25" maxlength="30"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td align="right">Nama Depan:</td>
			<td><input name="TxtNamaA" type="text" value="" size="25"
maxlength="30"></td>
		</tr>
		<tr>
			<td align="right">Nama Belakang:</td>
			<td><input name="TxtNamaB" type="text" Value="" size="25"
maxlength="30"></td>
		</tr>
		<tr>
			<td align="right">Kelamin:</td>
			<td><input name="RbKelamin" type="radio" value="p" checked>
				pria
				<input type="radio" name="RbKelamin" value="W">
				Wanita</td>
		</tr>
		<tr>
			<td align="right">Alamat:</td>
			<td><textarea name="TxtAlamat" cols="30" rows="2"> 
			</textarea></td>
		</tr>
		<tr>
			<td align="right">E-mail:</td>
			<td><input name="TxtEmail" type="text" value="" size="35"
maxlength="60"></td>
		</tr>
		<tr>
			<td align="right">Telepon:</td>
			<td><input name="TxtTelepon" type="text" value="" size="25" maxlength="15"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Daftar Sekarang"></td>
		</tr>
	</table>
</form>
</body>
</html>
