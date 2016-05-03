    <?php
session_start();
include 'user/koneksi.php';
$id = $_POST['id_user'];
$pass = $_POST['password'];


// query untuk mendapatkan record dari username
$hasil = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_user = '$id' and password='$pass'");
$data = mysqli_fetch_array($hasil);
// cek kesesuaian password
if ($id == $data['id_user'] && $pass==$data['password'])
{
    // menyimpan username dan level ke dalam session
    $_SESSION['identitas'] = $data['id_user'];  
    header('location: admin/index.php');
}
else 
{
    $hasil = mysqli_query($koneksi, "SELECT * FROM login WHERE id_user = '$id' and password='$pass'");
    $data = mysqli_fetch_array($hasil);
       if ($id == $data['id_user'] && $pass==$data['password']){
            $_SESSION['identitas'] = $data['id_user'];
            header('location: user/index.php');
        }
        else
        {
            echo "Gagal Login";
        }
}

?>