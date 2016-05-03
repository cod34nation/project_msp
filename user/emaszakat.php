

<div class="box-header">
                                <h3 class="box-title">Emas Pasaran</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <hr>
                                <div class="col-xs-12">
                                    Harga Emas Saat ini :
                                     <table class="table table-striped" >
                          <tbody >
                              <tr>
                                  <th style="width: 10px"> </th>
                                  <th> Harga Emas/Gram</th>
                                  
                              </tr>
                              <tr>  
                                <th> IDR</th>
                                <th> <?php 
                                
                               include "koneksi.php";



                                 $query=mysqli_query($koneksi,"SELECT * FROM admin ");
                                 $data2 = mysqli_fetch_array($query)or die(mysql_error());
                                 $emas=$data2['harga_emas'];

                                 echo $emas;

                                  ?>



                                
                              
                        </tbody>
                      </table>
                                </div>
                            </div>