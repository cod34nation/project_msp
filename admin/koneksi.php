

<?php
$host='localhost';
$user='root';
$pass='';
$database='umkm';
//Konek ke server MySQL
$koneksi = mysql_connect($host, $user, $pass) or die("Gagal koneksi...!").mysql_error();

mysql_select_db($database) or die("Data base".$database." tidak ada".mysql_error());
?>