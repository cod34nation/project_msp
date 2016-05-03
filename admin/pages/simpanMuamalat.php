<?php
include "koneksi.php";
$judul  = addslashes($_POST['judul']);
$isi = addslashes($_POST['isi']);

$input=mysql_query("insert into muamalat values ('','$judul','$isi','1',CURRENT_TIMESTAMP)",$koneksi) or die (mysql_error()); 
?>
<?php
if ($input)
{
  ?>
  <script language="javascript">
                    alert('Data Tersimpan, Pengajuan masih dalam proses, terimakasih');
                    document.location="muamalatUtama.php";
                </script>
<?php
}
  ?>     


      