<?php
	include 'template.php';
?>

<html>
<body>

<form action="proses.php?aksi=tambah" method="post">
	<br><br><br><br><br>
		<body bgcolor="#bbb">
		<font face="Comic Sans MS">
		<i><h2 align="center"> Silahkan Masukkan Data Pelanggan </h2></i><br>

<table align="center">
	<tr>
		<td>ID</td>
		<td><input type="text" name="id" ></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" ></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" ></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="text" name="jkl" placeholder="L/P"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Tambah Data" class="button button1">
	</tr>
</table>
</form>
</body>
</html>
