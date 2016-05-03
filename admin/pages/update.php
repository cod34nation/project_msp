<?php
include "koneksi.php";


$emas=$_POST['emas'];
$u= mysql_query("UPDATE admin SET harga_emas ='$emas' WHERE id_user='admin'") or die(mysql_error());

if($u){



header('location:emaszakat.php');

}
else{
	echo "gagal";
}

?>