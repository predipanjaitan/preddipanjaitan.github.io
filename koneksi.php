<?php
$server   = "localhost";
$username = "root";
$password = "12345";
$database = "malasngoding_kios";

$koneksi = mysql_connect($server,$username,$password) or die ('Koneksi gagal');

if($koneksi){
	mysql_select_db($database) or die ('Database belum dibuat');	
}

?>