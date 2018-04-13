<?php
	include 'database.php';
	$db = new database();
	include 'template.php';
?>

<html>
<body>
<br><br><br><br><br><br>
<div align="center">
	<i><h2> Hasil </h2><br></i>
	<table cellpanding="10" id="tabel" border="0" style="font-size:17px">
	<tr>
		<th>No</th>
		<th>ID</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>JKL</th>
		<th>Option</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $d){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['id']; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['alamat']; ?></td>
		<td><?php echo $d['jkl']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $d['id']; ?>"><img src="img/update.png" width="25" height="25"></a>
			<a onclick="return confirm('Yakin Hapus ?')" href="proses.php?id=<?php echo $d['id']; ?>&aksi=delete"><img src="img/delete.png" width="25" height="25"></a>
		</td>
	</tr>
<?php
	}
?>
</table><br>
		<td><a class="button button1" href="input.php">Input</a></td>
	</div><br><br>

	<table align="center" style="font-size:18px">

		<tr>
	<th>Kelompok 2 : </th>
		</tr>

<tr>
		<td>Achmad Nurfauzi <br>
		Amat Deska Arya <br>
		Rhamat Illahi <br>
		Rizqy Fachrurozi </td>
</tr>

	</table>
</body>
</html>
