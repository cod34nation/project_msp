<?php
include "koneksi.php";

error_reporting(E_ALL && ~E_NOTICE);
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no=$_POST['no'];



$insert=mysql_query("INSERT INTO bmt VALUES('$id','$nama','$alamat','$no')") or die(mysql_error());

if($insert){

 //echo '<div class="alert alert-warning">Data berhasil dihapus.</div>';
header('location:bmt.php');
}
else{
	echo "gagal";
}

?>