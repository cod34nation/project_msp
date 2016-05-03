
                  
                <div class="box-header">
                  <h3 class="box-title">Data BMT Malang</h3>
                </div><!-- /.box-header -->

                <div class="box-body">

            <!-- Table Memulai -->
                  <table class="table table-striped table-hover table-responsive">
        <tr>
          <th>N0</th>
          <th>ID BMT</th>
          <th>NAMA BMT</th>
          <th>ALAMAT BMT</th>
          <th>NO TELP BMT</th>


<!--
          <th>JURUSAN</th>
          <th>STATUS</th>
          <th>SETTING</th>
-->
        </tr>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="umkm";

$conn=new mysqli($servername, $username, $password, $dbname);

        // uNTUK HAPUS
         if(isset($_GET['aksi']) == 'delete'){
        $id_bmt = $_GET['id_bmt'];
        $cek = mysqli_query($conn, "SELECT * FROM bmt WHERE id_bmt='$id_bmt'");
        if(mysqli_num_rows($cek) == 0){
          echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
        }else{
          $delete = mysqli_query($conn, "DELETE FROM bmt WHERE id_bmt='$id_bmt'");
          if($delete){
            echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
          }else{
            echo '<div class="alert alert-info">Data gagal dihapus.</div>';
          }
        }
      }



        //UNTUK INSERT DATA
          $sql = mysqli_query($conn, "SELECT * FROM bmt ORDER BY id_bmt ASC");

        if(mysqli_num_rows($sql) != 0){

          $no = 1;
          while($row = mysqli_fetch_assoc($sql)){
            echo '
            <tr>
              <td> '.$no++.'</td>
              <td>'.$row['id_bmt'].'</td>
              <td>'.$row['nama_bmt'].'</td>
              <td>'.$row['alamat_bmt'].'</td>

              <td>'.$row['telp_bmt'].'</td>'
               ;

            echo '
              </td>

            </tr>
            ';

          }
        }


        else{

          echo "<TD>Tidak ada Data</TD>";

        }


        ?>
      </table>
<!-- Tabel Selesai -->

                </div><!-- /.box-body -->
             