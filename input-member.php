<div style="border:0; padding:10px; width:860px; height:400;">
<?php
	if ($_POST['Submit'] == "Input") {
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$nama		= $_POST['nama'];
	$nik		= $_POST['nik'];
	$tgl_lahir	= $_POST['thn_lahir']."-".$_POST['bln_lahir']."-".$_POST['tgl_lahir'];
	$jenis_kelamin	= $_POST['jenis_kelamin'];
	$pekerjaan	= $_POST['pekerjaan'];
	$alamat		= $_POST['alamat'];
	$email		= $_POST['email'];
	$no_hp		= $_POST['no_hp'];
	
	//validasi data data kosong
	if (empty($_POST['username'])||empty($_POST['password'])||empty($_POST['nama'])||empty($_POST['nik'])) {
		?>
			<script language="JavaScript">
				alert('Data Harap Dilengkapi!');
				document.location='home-admin.php?page=form-input-member';
			</script>
		<?php
	}
	else {
	include "koneksi.php";
	//cek username di database
	$cek=mysqli_num_rows (mysqli_query($Open,"SELECT username FROM member WHERE username='$_POST[username]'"));
	if ($cek > 0) {
	?>
			<script language="JavaScript">
			alert('Username sudah dipakai!, silahkan ganti username yang lain');
			document.location='home-admin.php?page=form-input-member';
			</script>
	<?php
	}
//Masukan data ke Table data member
$input1	="INSERT INTO member (username, password, nama, nik, tgl_lahir, jenis_kelamin, pekerjaan, alamat, email, no_hp)
		VALUES ('$username','$password','$nama','$nik','$tgl_lahir','$jenis_kelamin','$pekerjaan','$alamat','$email','$no_hp')";
$query_input1 =mysqli_query($Open,$input1);
//Masukan data ke Table login
$input2	="INSERT INTO login (username,nama,password,hak_akses) VALUES ('$username','$nama','$password','Member')";
$query_input2 =mysqli_query($Open,$input2);
	if ($query_input1) {
	//Jika Sukses
?>
		<script language="JavaScript">
		alert('Input Data Member Berhasil!');
		document.location='home-admin.php';
		</script>
<?php
	}
	else {
	//Jika Gagal
	echo "Input Gagal!";
	}
//Tutup koneksi engine MySQL
	mysqli_close($Open);
	}
}
?>
</div>