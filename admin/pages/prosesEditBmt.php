<?php
include "koneksi.php";


$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no=$_POST['no'];


$u= mysql_query("UPDATE bmt SET nama_bmt ='$nama',alamat_bmt='$alamat',
telp_bmt='$no' WHERE id_bmt='$id'") or die(mysql_error());

if($u){

 //echo '<div class="alert alert-warning">Data berhasil dihapus.</div>';
header('location:bmt.php');
//echo $id,$alamat,$nama,$no;


}
else{
	echo "gagal";
}

?>