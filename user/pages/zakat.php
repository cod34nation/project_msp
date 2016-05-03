<?php
session_start();
include 'koneksi.php';
if (empty($_SESSION['identitas'])){
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html>
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

    <style>

    .input
    {
      width :300px;
      position: relative;
      margin:20px auto;

    }

    .box 
    {
      width :600px;
      position: relative;
      margin: 20px auto;

    }
    </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>SUMK</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin </b>SMART UMKM</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Beranda</span> 
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Muamalat</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Emas dan Zakat</span>
               
              </a>
            </li>
            <li>
              <a href="pages/tables/bmt.php">
                <i class="fa fa-table"></i> <span>BMT</span>
               
              </a>
            </li>
            <li>
              <a href="pages/tables/user.php">
                <i class="fa fa-calendar"></i> <span>User</span>
<!--                <small class="label pull-right bg-red">3</small>-->
              </a>
            </li>
            
           
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Beranda
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">BERANDA</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
              
                  
           <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Hitung Zakat</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="input">
                    <form action ="hitung.php" method="post"> 
          <div class="form-group has-feedback">
           <input type="Text" name="nama"id="nama" class="form-control" placeholder="Atas Nama">
           <form class="form-inline">
           </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Harga Emas</label>
    <div class="input-group">
      <div class="input-group-addon">Rp.</div>
      <input type="text" class="form-control" id="exampleInputAmount" name ="emas" id="emas"placeholder="Harga Emas Murni/Gram">
      <div class="input-group-addon">.00</div>
    </div>
  </div>

  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Harga Anda</label>
    <div class="input-group">
      <div class="input-group-addon">Rp.</div>
      <input type="text" class="form-control" name ="harta"id="harta" placeholder="Harta Anda">
      <div class="input-group-addon">.00</div>
    </div>
  </div><center>
  <button type="submit" class="btn btn-primary">Cek</button></center>
  
</form>
        </div>
        
            
          </div>

                  <hr>

                  <strong><i class="fa fa-map-marker margin-r-5"></i> Lihat Harga Emas</strong>
                   <a href="http://harga-emas.com/logam-mulia-aneka-tambang/" target="_blank">DISINI</a>

                  <hr>


                  <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                  <font color="navy" face="arial" size="2">

<ol>
<li>Masukkan harga emas murni & harta Anda tanpa menggunakan titik ataupun koma (misalkan 500000 yaitu lima ratus ribu).</li>
<li>Harga emas murni (emas 24 karat) pada saat ini. Berfungsi untuk menentukan nishab zakat mal. Nishab adalah jumlah minimal harta kekayaan yang wajib dikeluarkan zakatnya.</li>
<li>Harga emas bervariasi, silahkan Anda mencari rata-rata dari harga emas pada situs tersebut di atas.</li>
<li>Harga emas sering berubah-ubah (tapi pada situs tersebut di atas adalah harga update, insyaALLAH). Jadi jika Anda telah wajib berzakat, jangan menunda-nunda.
<li>Harta yang dimaksud adalah harta yang Anda miliki dalam setahun (misalkan uang tabungan yang Anda miliki selama satu tahun).</li>
<li>Untuk lebih lanjut mengetahui tentang zakat mal silahkan <a href="http://majalah-assunnah.com/index.php?option=com_content&view=article&id=172" target="_blank">klik di sini.</a></li>

</font>
</ol>
</font>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->        

 

        </div>
      
      
     
      
                </div><!-- /.box-header -->
                
      <div class="table-responsive">
      <table class="table table-striped table-hover">
        
      </table>

                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                </div>
            </div>
         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

    
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
