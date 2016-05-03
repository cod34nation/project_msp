<?php 
session_start();
include "koneksi.php";



include 'koneksi.php';

$iduser=$_SESSION['identitas'];

$date=date('d-F-Y');

$tgl=substr($date,7,11);

$query=mysqli_query($koneksi,"SELECT * FROM data_satu_tahun WHERE id_user='$iduser' AND tahun='$tgl'") or die(mysqli_error());
$data=mysqli_fetch_array($query);
$zakat=$data['zakat'];

$idses=mysqli_query($koneksi, "SELECT SUM(omset) as a, SUM(biaya) as b, SUM(laba) as c, SUM(prive) as d from bulan where id_user='$iduser' AND tanggal_input like'%$tgl%' ");
//$idses=mysqli_query($koneksi, "SELECT * from bulan")or die(mysqli_error());
$dat=mysqli_fetch_array($idses);
$oms=$dat['a'];
$bia=$dat['b'];
$laba=$dat['c'];
$prive=$dat['d'];

$laba_bersih=$oms-$zakat;

if($dat)
{
    mysqli_query($koneksi,"update data_satu_tahun SET pendapatan='$oms', beban='$bia', laba_kotor='$laba',prive='$prive', laba_bersih='$laba_bersih'") or die(mysqli_error());
}




?>

 <div class="box-header">
<h3 class="box-title">Halaman Rekap</h3>
                </div><!-- /.box-header -->
                <div class="box-body" align="center">
                    <p  ><h2> Welcome Back</h2></p>
                </div><!-- /.box-body -->
               <div class="col-md-6">
                   <br>

                                                                    <div class="form-horizontal">
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
                                                                                    <input type="text" class="form-control" id="inputLabaKotor" placeholder="Jumlah LabaKotor" value="<?php echo $laba;?>">
                                                                                    <div class="input-group-addon">.00</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="inputPrive" class="col-sm-3 control-label">Prive</label>
                                                                            <div class="col-sm-7">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon">Rp</div>
                                                                                    <input type="text" class="form-control" id="inputPrive" placeholder="Jumlah Prive" value="<?php echo $prive; ?>">
                                                                                    <div class="input-group-addon">.00</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                            
                                                                    <div class="form-horizontal">
                                                                        <div class="form-group">
                                                                            <label for="inputPendapatan" class="col-sm-3 control-label">Zakat</label>
                                                                            <div class="col-sm-7">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon">Rp</div>
                                                                                    <input type="text" class="form-control" id="inputPendapatan" placeholder="Jumlah Zakat" value="<?php echo $zakat; ?>">
                                                                                    <div class="input-group-addon">.00</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label for="inputLabaBersih" class="col-sm-3 control-label">Laba Bersih</label>
                                                                            <div class="col-sm-7">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon">Rp</div>
                                                                                    <input type="text" class="form-control" id="inputLabaBersih" placeholder="Jumlah LabaBersih" value="<?php echo $laba_bersih; ?>">
                                                                                    <div class="input-group-addon">.00</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    
                                                                    </div>
                                                                </div>
                                        <div class="col-md-6">
                                            <div class="form-horizontal">
                                           
                                                                       
                                                                        
                                                                        
                                            </div>
                                        </div>


                                                <!-- Akhir ditampilkan-->

                                        </form>

                                    </div>



                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>