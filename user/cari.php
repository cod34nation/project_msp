<?php
include'koneksi.php';
$idbul=$_POST['pencarian'];
$idus=$_POST['iduse'];


$idses=mysqli_query($koneksi, "SELECT * FROM bulan WHERE id_user='$idus' AND id_bulan='$idbul' group by id_bulan desc");
$data = mysqli_fetch_array($idses);
$bulanapa=$data['id_bulan'];
$oms=$data['omset'];
$bia=$data['biaya'];
$uta=$data['utang'];
$mod=$data['modal'];
$lab=$data['laba'];
$bangunan=$data['bangunan_tanah'];
$pri=$data['prive'];
$labtor=$oms-$bia;
$labber=$labtor-$pri;
$passi=$uta+$mod;

if($idses)
{
  header("location:index.php?page=bulanan");
  
}
?>
