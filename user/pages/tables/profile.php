<?php
session_start();
include '../../koneksi.php';
if (empty($_SESSION['identitas'])){
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USER | SMART UMKM </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-green sidebar-mini">
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
                  <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="pages/tables/profile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../../logout.php" class="btn btn-default btn-flat">Sign out</a>
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
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class=" treeview">
              <a href="../../index.php">
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
                <i class="fa fa-angle-left pull-right"></i>
              </a>
                <ul class="treeview-menu">
                    <li><a href="emaszakat.php"><i class="fa fa-circle-o"></i> Lihat</a></li>
                    <li><a href="add_emaszakat.php"><i class="fa fa-circle-o"></i> Tambah </a></li>
                </ul>
            </li>
            <li class=" treeview">
                  <a href="bmt.php">
                    <i class="fa fa-pie-chart"></i>
                    <span>BMT</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
            </li>
             <li class=" treeview">
              <a href="#">
                <i class="fa fa-dollar"></i>
                <span>Keuangan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
                <ul class="treeview-menu">
                    <li><a href="pages/rekap.php"><i class="fa fa-circle-o"></i>Satu Tahun</a></li>
                    <li><a href="pages/bulanan.php"><i class="fa fa-circle-o"></i> Satu Bulan </a></li>
                </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Profile UMKM
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Profile </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Profile Diri SMART UMKM</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DataDiri">
                  Edit 
                </button>                  
              <!-- Modal Mulai -->
                 <!-- Button trigger modal -->
                <div class="row">

                   <!-- Modal -->
                <div class="modal fade" id="DataDiri" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Data Diri Smart UMKM </h4>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" style="animation-delay: 1s;" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID UMKM</label>
					<div class="col-sm-5">
						<input type="text" name="id_user" class="form-control" placeholder="ID UMKM" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">PASSWORD</label>
					<div class="col-sm-5">
						<input type="password" name="pass1" class="form-control" placeholder="PASSWORD" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KONFIRMASI PASSWORD</label>
					<div class="col-sm-5">
						<input type="password" name="pass2" class="form-control" placeholder="KONFIRMASI PASSWORD" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA UMKM</label>
					<div class="col-sm-8">
						<input type="text" name="nama_umkm" class="form-control" placeholder="NAMA UMKM" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA PEMILIK</label>
					<div class="col-sm-8">
						<input type="text" name="nama_pemilik" class="form-control" placeholder="NAMA ANDA" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALAMAT</label>
					<div class="col-sm-8">
						<input type="text" name="alamat" class="form-control" placeholder="ALAMAT" required>
					</div>
				</div>
				

				
				<div class="form-group">
					<label class="col-sm-3 control-label">JENIS USAHA</label>
					<div class="col-sm-8">
						<select name="jenis_usaha" class="form-control">
							<option value="">JENIS USAHA</option>
							<option value="Manufaktur">MANUFAKTUR</option>
							<option value="Dagang Barang">DAGANG BARANG</option>
							<option value="Dagang Makanan">DAGANG MAKANAN</option>
						</select>
					</div>
				</div>
				
			</form>
            
                      </div>    
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="edit" value="edit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>

                 <!-- Akhir Modal -->         
            <form class="form-horizontal" style="animation-delay: 1s;" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">ID UMKM</label>
					<div class="col-sm-3">
						<input type="text" name="id_user" class="form-control" placeholder="ID UMKM" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">PASSWORD</label>
					<div class="col-sm-3">
						<input type="password" name="pass1" class="form-control" placeholder="PASSWORD" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA UMKM</label>
					<div class="col-sm-5">
						<input type="text" name="nama_umkm" class="form-control" placeholder="NAMA UMKM" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA PEMILIK</label>
					<div class="col-sm-5">
						<input type="text" name="nama_pemilik" class="form-control" placeholder="NAMA ANDA" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALAMAT</label>
					<div class="col-sm-5">
						<input type="text" name="alamat" class="form-control" placeholder="ALAMAT" required>
					</div>
				</div>
				

				
				<div class="form-group">
					<label class="col-sm-3 control-label">JENIS USAHA</label>
					<div class="col-sm-3">
						<select name="jenis_usaha" class="form-control">
							<option value="">JENIS USAHA</option>
							<option value="Manufaktur">MANUFAKTUR</option>
							<option value="Dagang Barang">DAGANG BARANG</option>
							<option value="Dagang Makanan">DAGANG MAKANAN</option>
						</select>
					</div>
				</div>
				
			</form>
                       
                    
                </div>
                 <div class="row">
                     
                    </div>
                    
                  
                  
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
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
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
