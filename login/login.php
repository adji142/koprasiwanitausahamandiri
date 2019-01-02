<?php
// Sesion Di jalankan
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
// membuat koneksi Ke MYSQL dan Database, Sesuaikan Dengan pengaturan di tempat anda 
$koneksi=mysqli_connect("localhost", "root", "","koperasi_new");
// $db=mysqli_select_db("koperasi_new",$koneksi);

// mencari password berdasarkan username
$query = "SELECT * FROM login WHERE username = '$username'";
$hasil = mysqli_query($koneksi,$query) or die("Error");
$data  = mysqli_fetch_array($hasil);

if ($data['username'] && $password==$data['password']){

    // jika sesuai, maka buat session
        $_SESSION['username'] = $data['username'];
		$_SESSION['nama'] = $data['nama'];
        $_SESSION['hak_akses'] = $data['hak_akses'];
        if($data['hak_akses']=="Admin"){
            header("location:../home-admin.php");
        }else if($data['hak_akses']=="Member"){
            header("location:../home-member.php");
        }
}
else{
		?>
		<script language="JavaScript">
			alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
			document.location='../index.php';
		</script>
		<?php
    }
?>