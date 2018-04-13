<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>

	<style>
	.button {
	    background-color: #4CAF50; /* Green */
	    border: none;
	    color: white;
	    padding: 15px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 14px;
	    margin: 4px 2px;
	    cursor: pointer;
	    -webkit-transition-duration: 0.4s; /* Safari */
	    transition-duration: 0.4s;
	}

	.button1{
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}
	</style>

	<div class="w3-teal">
  <div class="w3-container">
  	<br>
    <i><h2 align="center">Menu Input Data</h2></i>
    <br>
  </div>
</div>

<?php
	include 'database.php';
	$db=new database();
?>

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
		<td><input type="submit" value="Ubah Data" class="button button1"></td>
	</tr>

	<?php
	}
	?>

</table>
</form>
</font>
