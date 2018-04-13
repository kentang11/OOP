<?php
	include 'database.php';
	$db=new database();
	include 'template.php';
?>

<html>
<body>

<form action="proses.php?aksi=update" method="post"> 

	<?php
	foreach ($db->edit($_GET['id']) as $d) {
	?>

	<br><br><br><br><br>
		<body bgcolor="#bbb">
		<font face="Comic Sans MS">
		<i><h2 align="center"> Silahkan Edit Data Pelanggan </h2></i><br>

<table align="center">
	<tr>
		<td>ID</td>
		<td><input type="text" name="id" value = "<?php echo $d['id']; ?>"></td>

	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value = "<?php echo $d['nama']; ?>"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value = "<?php echo $d['alamat']; ?>"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input type="text" name="jkl" placeholder="L/P" value = "<?php echo $d['jkl']; ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Ubah Data" class="button button1">
		<input type="submit" value="Cancel" class="button button1"></td></a>
	</tr>

<?php
	}
?>

</table>
</form>
</body>
</html>
