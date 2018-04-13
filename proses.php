<?php
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){

 	$db->input($_POST['id'], $_POST['nama'],$_POST['alamat'],$_POST['jkl']);
 	header("location:tampil_data.php"); //header untuk melempar data

 }elseif($aksi=="update"){

		$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['jkl']);

		header("location:tampil_data.php");

	}elseif($aksi=="delete")
	{
		$db->delete($_GET['id']);
		header("location:tampil_data.php");
	}
?>
