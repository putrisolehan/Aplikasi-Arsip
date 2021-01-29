<?php 
class bd {
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "dbs_latihan";

	public function __construct(){
		$connect = mysql_connect($this->host, $this->username, $this->password, $this->database);
		if ($connect) {
			echo "Koneksi berhasil";
		} else{
			echo "Koneksi gagal";
		}
	}
}

 ?>