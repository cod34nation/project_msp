<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMART-UMKM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.print.css" media="print">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    .tombol{
      width :150px;
      margin-left: 20px;
      margin-bottom: 20px;
    }

    </style>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>U</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin </b>SMART</span>
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
                  <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Afrizal Setyo W</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Afrizal Setyo W - Manager
                      <small>Manager SMART-UMKM</small>
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
              <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>AFRIZAL SETYO</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="../index.php">
                <i class="fa fa-dashboard"></i> <span>Beranda</span> 
              </a>
            </li>
            <li class="treeview">
              <a href="muamalat.php">
                <i class="fa fa-files-o"></i>
                <span>Muamalat</span>
              </a>
            </li>
            <li class="active treeview">
              <a href="emaszakat.php">
                <i class="fa fa-pie-chart"></i>
                <span>Emas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
                <ul class="treeview-menu">
                    <li><a href="emaszakat.php"><i class="fa fa-circle-o"></i> Lihat Harga Emas</a></li>
                    <li><a href="edit.php"><i class="fa fa-circle-o"></i> Ubah Harga Emas </a></li>
                </ul>
            </li>
            <li class=" treeview">
                  <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>BMT</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="bmt.php"><i class="fa fa-circle-o"></i> Lihat</a></li>
                    <li><a href="tambahBMT.php"><i class="fa fa-circle-o"></i> Tambah </a></li>

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
           <CENTER><u> DATA BMT</u></CENTER>
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data BMT </li>
          </ol>
        </section>


      
        <div class="table-responsive">
      <table class="table table-striped table-hover">
        <div class ="tombol">
        <a href="tambahBMT.php"><button class="btn btn-block btn-info btn-sm"><H6><B>TAMBAH DATA BMT</B></H6></button></a>

      </div>


        <tr>
          <th>N0</th>
          <th>ID BMT</th>
          <th>NAMA BMT</th>
          <th>ALAMAT BMT</th>
          <th>NO TELP BMT</th>
          <TH>ACTION</TH>
          
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
              <td>
                
               
                
                
                <a href="bmt.php?aksi=delete&id_bmt='.$row['id_bmt'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

                <a href="editBMT.php?aksi=edit&id_bmt='.$row['id_bmt'].'" title="Edit Data"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
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

                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
    
     
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
             </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
  </body>
</html>
