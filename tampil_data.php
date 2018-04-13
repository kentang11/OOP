<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body bgcolor="#bbb">
	<style>
	.button {
	    background-color: #4CAF50; /* Green */
	    border: none;
	    color: white;
	    padding: 15px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
	    margin: 4px 2px;
	    cursor: pointer;
	    -webkit-transition-duration: 0.4s; /* Safari */
	    transition-duration: 0.4s;
			line-height: 0.5;
	}

	.button1{
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}
	</style>

	<div class="w3-teal">
  <div class="w3-container">
  	<br>
    <i><h2 align="center">Hasil Data</h2></i><br>
  </div>
</div>

<?php
	include 'database.php';
	$db = new database();
?>

<br><br><br><br><br><br>
<div align="center">
	<table cellpanding="10" id="tabel" border="0" style=”font-size:14px”>
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
			<a href="edit.php?id=<?php echo $d['id']; ?>"><img src="img/update.png" width="35" height="35"></a>
			<a href="proses.php?id=<?php echo $d['id']; ?>&aksi=delete"><img src="img/delete.png" width="35" height="35"></a>
		</td>
	</tr>
<?php
	}
?>
</table><br>
		<td><a class="button button1" href="input.php">Input</a></td>
	</div>
	</body>
</html>
