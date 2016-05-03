<?php if(!isset($_GET['q'])):?>

<center><form name="form1" method="get" action=""> <label> Masukkan ID UMKM atau Nama UMKM</label>
<table><td></td><td><input tyoe ="text" name="q" rows="1" id="q"></td><td><input type="submit" value="Search"/></td>
</table>
</form> </center>

<div id="result"></div>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
	var allow = true;
	$(document).ready(function(){
		$("#q").keyup(function(e){
			if(e.which == '13'){
				e.preventDefault();
					
				loadData();
			}else if($(this).val().length >= 0){
					
				loadData();
			}
		});
	});
	function loadData(){
	var query=document.getElementById('q').value;
		if(allow){
			allow = false;
			$("#result").html('loading...');
			$.ajax({
				url:'cari.php?q='+query,
				success:
					function (data){
					$("#result").html(data);
					allow = true;
				}
			});
		}
	}
</script>
<?php endif;?>
<style>
.highlight
{
background: #CEDAEB;
}

.highlight_important
{
background: #9afa95;
}

.peringatan{
	height: 50px;
	margin-top: 10px;


}

.tabel
{
	margin: 50px auto;
}
</style>

<?php 
//Fungsi Mark Teks
function hightlight($str, $keywords = '')
{
$keywords = preg_replace('/\s\s+/', ' ', strip_tags(trim($keywords))); // filter

$style = 'highlight';
$style_i = 'highlight_important';

/* Apply Style */

$var = '';

foreach(explode(' ', $keywords) as $keyword)
{
$replacement = "<span class='".$style."'>".$keyword."</span>";
$var .= $replacement." ";

$str = str_ireplace($keyword, $replacement, $str);
}
$str = str_ireplace(rtrim($var), "<span class='".$style_i."'>".$keywords."</span>", $str);
return $str;
}

//END Fungsi Mark Teks
if(isset($_GET['q']) && $_GET['q']){ 
 $conn =   

 mysql_connect("localhost", "root", ""); 
 mysql_select_db("umkm_001"); 
 $q = $_GET['q'];
 
//Menghitung Jumlah Yang Tampil 

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 6;
$mulai_dari = $limit * ($page - 1);
$sqlCount = "select count(id_user) from login where id_user like '%$q%' or id_user like '%$q%' or nama_umkm like '%$q%' ";
$rsCount =   mysql_fetch_array(  mysql_query($sqlCount));
$banyakData = $rsCount[0];
$sql = "select * from login where id_user like '%$q%' or id_user like '%$q%' or nama_umkm like '%$q%' order by id_user DESC limit $mulai_dari, $limit"; 
//Akhir Menghitung Jumlah Yang Tampil 
 $result =   mysql_query($sql);
 




 if(  mysql_num_rows($result) > 0){ 
 ?> 
 <?php if(isset($_GET['page'])):?>
<form name="form1" method="get" action=""> 
<table><td></td><td><textarea name="q" rows="1" id="q"></textarea></td><td><input type="submit" value="Search"/></td>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN | SMART UMKM </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>





 <?php endif;?>
 <center><div class="table-responsive">

 	<div class= "peringatan">
<label><b>Hasil Pencarian : </label>
 	  <div class="alert alert-info">Data Ditemukan </div>
 	</div>
 <div class="tabel">
      <table class="table table-striped table-hover"><tr bgcolor="silver"><td>ID UMKM</td><td>Nama UMKM</td><td>Nama Pemilik
 </td><td>Alamat</td><td>Jenis Usaha</td><td>Aksi</td></tr>
 <?php 
 while($row =   mysql_fetch_array($result)){?> 

 <tr> 
 <td><?php echo hightlight($row['id_user'],$q);?></td> 
 <td><?php echo hightlight($row['nama_umkm'],$q);?></td> 
 <td><?php echo hightlight($row['nama_pemilik'],$q);?></td>
 <td><?php echo hightlight($row['alamat'],$q);?></td>
 <td><?php echo hightlight($row['jenis_usaha'],$q);?></td>
 
 <td>
 <a href="index.php?aksi=delete&id_user=<?=$row['id_user'];?>" title="Hapus Data" onclick="return confirm(\'Yakin?\')">
 	<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
<?php
 	if(isset($_GET['aksi']) == 'delete'){
        $id_user = $_GET['id_user'];
        $cek = mysqli_query($conn, "SELECT * FROM login WHERE id_user='$id_user'");
     
          $delete = mysqli_query($conn, "DELETE FROM login WHERE id_user='$id_user'");
          if($delete){
          	 echo '
              </td>
              <td>
                
               
                
                
                <a href="cari.php?aksi=delete&id_user='.$row['id_user'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
              </td>
            </tr>
            ';
            echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
           
          }else{
            echo '<div class="alert alert-info">Data gagal dihapus.</div>';
          }
        }
        ?>
</td>

  
 <td><?php 
 
  ?></td> 
 </tr> 
 <?php }?> 
 </table></div> </center>
 <?php 
 }else{ 
 	ECHO'<BR>';
 echo '<div class="alert alert-danger">Data Tidak Ditemukan</div>'; 
 } 
 //Halaman
 $banyakHalaman = ceil($banyakData / $limit);
echo '</br><div id="page" style="font-size:17px">Halaman: ';
for($i = 1; $i <= $banyakHalaman; $i++){
 if($page != $i){
 echo '  [<a href="cari.php?page='.$i.'&q='.$q.'">'.$i.'</a>]  ';
 }else{
 echo "[<span style='color:silver'>$i</span>] ";
 }
}
echo '&nbsp&nbsp<a href="index.php"><b>Ulangi Pencarian</b></a>';
//END HALAMAN
} 


?>
