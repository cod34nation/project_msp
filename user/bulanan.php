
<div class="box-header">
    <h3 class="box-title">Data Bulanan Keuangan UMKM </h3>
</div>
<!-- /.box-header -->
<div class="box-body" align="center">
    <div class="row">
        <div class="form-group">
            <form class="form-inline" method="POST" action="">
                <select name="pencarian" id="pencarian" class="form-control">
                    <option value=""> - Cari Bulan -
                       <option value="1">Januari
                        <option value="2">Februari
                            <option value="3">Maret
                                <option value="4">April
                                    <option value="5">Mei
                                        <option value="6">Juni
                                            <option value="7">Juli
                                                <option value="8">Agustus
                                                    <option value="9">September
                                                        <option value="10">Oktober
                                                            <option value="11">November
                                                                <option value="12">Desember
                                                                </select>
                                                                <input type="hidden" id="iduse" name="iduse" value="<?php echo $iduser ?>"></input>
                                                                <button type="submit" class="btn btn-warning"/> Lihat</button> 
                                                                <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#TambahBulan">Tambah</button>
                                                               
                                                            
                                                        </div>

     

                                                        <!-- Untuk ditampilkan -->
                                                        <hr>
                                                        
                                                       
                                                        <div class="col-md-6">
                                                            
                                                            
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


 ?>
 
                                                            <div class="form-horizontal">
                                                                  <div class="box-header btn btn-primary-lg">
                <h3>
                  <?php 
                  
                  if ($bulanapa=='1') {
                    echo "<h3>Januari</h3>";
                  } elseif ($bulanapa=='2') {
                    echo "Februari";
                  } elseif ($bulanapa=='3') {
                    echo "Maret";
                  } elseif ($bulanapa=='4') {
                    echo "April";
                  } elseif ($bulanapa=='5') {
                    echo "Mei";
                  } elseif ($bulanapa=='6') {
                    echo "Juni";
                  } elseif ($bulanapa=='7') {
                    echo "Juli";
                  } elseif ($bulanapa=='8') {
                    echo "Agustus";
                  } elseif ($bulanapa=='9') {
                    echo "September";
                  } elseif ($bulanapa=='10') {
                    echo "Oktober";
                  } elseif ($bulanapa=='11') {
                    echo "November";
                  } elseif ($bulanapa=='12') {
                    echo "Desember";
                  } else {
                    echo "Kosong";
                  }
                  ?>
                </h3>
              </div>
                                                                
                                                                <div class="form-group">
                                                                  
                                                                    <label for="inputPendapatan" class="col-sm-3 control-label">Pendapatan</label>
                                                                    <div class="col-sm-7">
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon">Rp</div>
                                                                            <input type="text" class="form-control" id="inputPendapatan" placeholder="Jumlah Pendapatan" value="<?php echo $oms; ?>">
                                                                            <div class="input-group-addon">.00</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputBeban" class="col-sm-3 control-label">Beban</label>
                                                                    <div class="col-sm-7">
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon">Rp</div>
                                                                            <input type="text" class="form-control" id="inputBeban" placeholder="Jumlah Beban" value="<?php echo $bia; ?>">
                                                                            <div class="input-group-addon">.00</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputLabaKotor" class="col-sm-3 control-label">Laba Kotor</label>
                                                                    <div class="col-sm-7">
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon">Rp</div>
                                                                            <input type="text" class="form-control" id="inputLabaKotor" placeholder="Jumlah LabaKotor" value="<?php echo $labtor;?>">
                                                                            <div class="input-group-addon">.00</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputPrive" class="col-sm-3 control-label">Prive</label>
                                                                    <div class="col-sm-7">
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon">Rp</div>
                                                                            <input type="text" class="form-control" id="inputPrive" placeholder="Jumlah Prive" value="<?php echo $pri; ?>">
                                                                            <div class="input-group-addon">.00</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputLabaBersih" class="col-sm-3 control-label">Laba Bersih</label>
                                                                    <div class="col-sm-7">
                                                                        <div class="input-group">
                                                                            <div class="input-group-addon">Rp</div>
                                                                            <input type="text" class="form-control" id="inputLabaBersih" placeholder="Jumlah LabaBersih" value="<?php echo $labber; ?>">
                                                                            <div class="input-group-addon">.00</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-horizontal">
                                                             <div class="form-group">
                                                                <label for="inputLiabilitas" class="col-sm-3 control-label">Liabilitas</label>
                                                                <div class="col-sm-7">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">Rp</div>
                                                                        <input type="text" class="form-control" id="inputLiabilitas" placeholder="Jumlah Liabilitas" value="<?php echo $uta; ?>">
                                                                        <div class="input-group-addon">.00</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputModal" class="col-sm-3 control-label">Modal</label>
                                                                <div class="col-sm-7">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">Rp</div>
                                                                        <input type="text" class="form-control" id="inputModal" placeholder="Jumlah Modal" value="<?php echo $mod; ?>">
                                                                        <div class="input-group-addon">.00</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label" for="exampleInputAmountPassiva">Passiva</label>
                                                                <div class="col-sm-7">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">Rp</div>
                                                                        <input type="text" class="form-control" id="exampleInputAmountPassiva" placeholder="Jumlah Passiva" value="<?php echo $passi;?>">
                                                                        <div class="input-group-addon">.00</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label " for="exampleInputAmount">Aset</label>
                                                                <div class="col-sm-7">
                                                                    <div class="input-group">
                                                                        <div class="input-group-addon">Rp</div>
                                                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Jumlah Aset" value="<?php echo $bangunan; ?>">
                                                                        <div class="input-group-addon">.00</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- Akhir ditampilkan-->

                                                </form>

                                            </div>



                                        </div>
                                        <!-- /.box-body -->
                                                   <!-- Modals untuk pop up bulan-->

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="TambahBulan" tabindex="-1" role="dialog" aria-labelledby="TambahBulanKu">

                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        <h4 class="modal-title" id="TambahBulanKu">Tambah Data Bulan </h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form method="POST" action="simpan.php">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                               
                                                                                <div class="form-horizontal">
                                                                                <div class="form-group">
                                                                                        <label for="inputPendapatan" class="col-sm-3 control-label">Bulan</label>
                                                                                        <div class="col-sm-7">
                                                                                            <select name="tipbulan" id="tipbulan" class="form-control">
                    <option value=""> - Pilih Bulan -
                       <option value="1">Januari
                        <option value="2">Februari
                            <option value="3">Maret
                                <option value="4">April
                                    <option value="5">Mei
                                        <option value="6">Juni
                                            <option value="7">Juli
                                                <option value="8">Agustus
                                                    <option value="9">September
                                                        <option value="10">Oktober
                                                            <option value="11">November
                                                                <option value="12">Desember
                                                                </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="col-sm-7">
                                                                                            <div class="input-group">
                                                                                                <input type="hidden" class="form-control" id="iduse" name="iduse" value="<?php echo $iduser;?>" >
                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="col-sm-7">
                                                                                            <div class="input-group">
                                                                                                <input type="hidden" class="form-control" id="datadate" name="datadate" value="<?php echo date('d-m-Y');?>" >
                                                                                            
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputPendapatan" class="col-sm-3 control-label">OMSET</label>
                                                                                        <div class="col-sm-7">
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon">Rp</div>
                                                                                                <input type="text" class="form-control" id="inputOmset" name="inputOmset" placeholder="Jumlah Pendapatan">
                                                                                                <div class="input-group-addon">.00</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputBeban" class="col-sm-3 control-label">Biaya Terpakai</label>
                                                                                        <div class="col-sm-7">
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon">Rp</div>
                                                                                                <input type="text" class="form-control" id="inputBiaya" name="inputBiaya" placeholder="Jumlah Beban">
                                                                                                <div class="input-group-addon">.00</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputLabaKotor" class="col-sm-3 control-label">Utang</label>
                                                                                        <div class="col-sm-7">
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon">Rp</div>
                                                                                                <input type="text" class="form-control" id="inputUtang" name="inputUtang" placeholder="Jumlah LabaKotor">
                                                                                                <div class="input-group-addon">.00</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputPrive" class="col-sm-3 control-label">Modal</label>
                                                                                        <div class="col-sm-7">
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon">Rp</div>
                                                                                                <input type="text" class="form-control" id="inputModal" name="inputModal" placeholder="Jumlah Prive">
                                                                                                <div class="input-group-addon">.00</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputLabaBersih" class="col-sm-3 control-label">Laba</label>
                                                                                        <div class="col-sm-7">
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon">Rp</div>
                                                                                                <input type="text" class="form-control" id="inputLaba" name="inputLaba" placeholder="Jumlah LabaBersih">
                                                                                                <div class="input-group-addon">.00</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputLiabilitas" class="col-sm-3 control-label">Bangunan & Tanah</label>
                                                                                        <div class="col-sm-7">
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon">Rp</div>
                                                                                                <input type="text" class="form-control" id="inputBangunan" name="inputBangunan" placeholder="Jumlah Liabilitas">
                                                                                                <div class="input-group-addon">.00</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputModal" class="col-sm-3 control-label">Kebutuhan Pribadi</label>
                                                                                        <div class="col-sm-7">
                                                                                            <div class="input-group">
                                                                                                <div class="input-group-addon">Rp</div>
                                                                                                <input type="text" class="form-control" id="inputPrive" name="inputPrive" placeholder="Jumlah Modal">
                                                                                                <div class="input-group-addon">.00</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
