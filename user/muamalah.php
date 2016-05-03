<div class="box-header">
                  <h3 class="box-title">Muamalah SMART UMKM</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                	 <section class="content">
          <!-- Info boxes -->



            <div class="box box-info">
               
                
 <div class ="pos">            
<?php
#------- memulai page number -------------------------------------------------------------------------------------#
$dataPerPage = 5; 
if(isset($_GET['hal']))
{ 
  $noPage = $_GET['hal'];
}else{  
  $noPage = 1;
}
$offset   = ($noPage - 1) * $dataPerPage;
include "koneksi.php";
$ambil_data = mysqli_query($koneksi,"select * from muamalat where status='1' order by id_muamalat desc limit $offset, $dataPerPage");
$hitung_record = mysqli_query($koneksi,"SELECT COUNT(*) AS jumData FROM muamalat");
$data          = mysqli_fetch_array($hitung_record);
$jumData       = $data['jumData'];
$jumPage  = ceil($jumData/$dataPerPage);
# ceil digunakan untuk membulatkan hasil pembagian
#------- akhir page number -------------------------------------------------------------------------------------#

while($hasil_data = mysqli_fetch_array($ambil_data)){
?>
  <div class="row-fluid">
     
      <div class="span8">
          <h2><?=$hasil_data['judul'];?></h2>
         
          <p>
              <a href="detailMuamalat.php?id=<?=$hasil_data['id_muamalat'];?>" class="btn btn-primary">Lihat Detail Postingan</a> 
            <a href="#" class="btn btn-inverse">Diposkan pada <?=$hasil_data['tanggal'];?></a>
          </p>
      </div>      
    </div>
    <hr>
<?php
}
?>
</div>


     
        </section>

                </div><!-- /.box-body -->