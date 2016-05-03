<?php
include("user/koneksi.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register | UMKM</title>


	 <!-- Bootstrap CSS -->
            <link href="assets/css/bootstrap.css" rel="stylesheet">
            <link href="assets/css/animate.css" rel="stylesheet">
            <link href="assets/css/font-awesome.css" rel="stylesheet">
            <link href="assets/css/bootstrap-datepicker.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	
	<div class="container">
		<div class="content">
			
			<hr />
			
			<?php
			if(isset($_POST['add'])){
                
				$id_user		   = $_POST['id_user'];
				$pass1		       = $_POST['pass1'];
                $pass2             = $_POST['pass2'];
				$nama_umkm		   = $_POST['nama_umkm'];
				$nama_pemilik	   = $_POST['nama_pemilik'];
				$alamat		       = $_POST['alamat'];
				$id_usaha	   	   = $_POST['id_usaha'];
//				
				$cek = mysqli_query($koneksi, "SELECT * FROM login WHERE id_user='$id_user'");
				if(mysqli_num_rows($cek) == 0){
					if($pass1 == $pass2){
						$pass = $pass1;
						$insert = mysqli_query($koneksi, "INSERT INTO login(id_user, password, nama_umkm, nama_pemilik, alamat, id_usaha)
															VALUES('$id_user', '$pass', '$nama_umkm', '$nama_pemilik', '$alamat', '$id_usaha')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
					}else{
						echo '<div class="alert alert-danger">Konfirmasi Password tidak sesuai.</div>';
					}
				}else{
					echo '<div class="alert alert-danger">ID UMKM sudah terdaftar.</div>';
				}
			}
			?>
			
			<form class="form-horizontal animated bounceInUp" style="animation-delay: 1s;" action="" method="post">
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
					<label class="col-sm-3 control-label">KONFIRMASI PASSWORD</label>
					<div class="col-sm-3">
						<input type="password" name="pass2" class="form-control" placeholder="KONFIRMASI PASSWORD" required>
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
						<select name="id_usaha" class="form-control">
							<option value="">JENIS USAHA</option>
							<option value="1">MANUFAKTUR</option>
							<option value="2">DAGANG BARANG</option>
							<option value="3">DAGANG MAKANAN</option>
						</select>
					</div>
				</div>
				<div class="form-group animated swing" style="animation-delay: 1s;">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
						<a href="user/index.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>