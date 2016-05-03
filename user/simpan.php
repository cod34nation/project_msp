<?php
include 'koneksi.php'; 
$id=$_POST['iduse'];
$bulan=$_POST['tipbulan'];
$tanggal=$_POST['datadate'];
$oms=$_POST['inputOmset'];
$bia=$_POST['inputBiaya'];
$uta=$_POST['inputUtang'];
$mod=$_POST['inputModal'];
$lab=$_POST['inputLaba'];
$bang=$_POST['inputBangunan'];
$pri=$_POST['inputPrive'];

$insert = mysqli_query($koneksi, "INSERT INTO bulan(id_user, id_input, id_bulan, tanggal_input, omset, biaya, utang, modal, laba, bangunan_tanah, prive) VALUES ('$id', null, '$bulan', '$tanggal', '$oms', '$bia', '$uta', '$mod', '$lab', '$bang', '$pri')") or die(mysqli_error());
if($insert){
							echo '<div class="alert alert-success">Data Berhasil Di masukan</div>';
							echo '<script> window.location="index.php?page=bulanan" </script>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>