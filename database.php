<?php

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "rental_mobil";
	private $dbCon;

	function __construct(){
		$this->dbCon = mysqli_connect($this->host, $this->uname, $this->pass);
		mysqli_select_db($this->dbCon, $this->db);
	}

	function tampil_data(){
		$data = mysqli_query($this->dbCon, "select * from pelanggan");
		//$hasil=array(); //data yg akan di tampung dihasil
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($id,$nama,$alamat,$jkl){
		mysqli_query($this->dbCon, "insert into pelanggan values('$id','$nama','$alamat','$jkl')");
	}

	function edit($id){
		$data = mysqli_query($this->dbCon, "select * from pelanggan where id='$id'");
		$hasil=array(); //data yg akan di tampung dihasil
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$jkl){
		mysqli_query($this->dbCon, "update pelanggan set id='$id',nama='$nama',alamat='$alamat',jkl='$jkl' where id='$id'");
	}

	function delete($id){
		mysqli_query($this->dbCon, "delete from pelanggan where id='$id'");
	}

}

?>
