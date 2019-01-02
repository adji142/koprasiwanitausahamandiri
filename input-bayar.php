<body bgcolor="#EEF2F7">
<?php
	include "koneksi.php";
	$username	= $_POST['username'];
	$nama		= $_POST['nama'];
	$tgl_bayar	= $_POST['thn_bayar']."-".$_POST['bln_bayar']."-".$_POST['tgl_bayar'];
	$jml_bayar	= $_POST['jml_bayar'];
	//validasi data jika data kosong
	if (empty($_POST['jml_bayar'])) {
	?>
		<script language="JavaScript">
			alert('Masukan Jumlah Bayar!');
			document.location='home-admin.php?page=list-pinjaman';
		</script>
	<?php
	}
	else {
	//Masukan data ke Table bayar
	$input	="INSERT INTO bayar (username, nama, tgl_bayar, jml_bayar) VALUES ('$username','$nama','$tgl_bayar','$jml_bayar')";
	$query_input =mysqli_query($Open,$input);
	//Update pinjaman di tabel member
	$update="UPDATE member SET pinjaman=pinjaman - $jml_bayar WHERE username='$username'";
	$query_update =mysqli_query($Open,$update);
		if ($query_update) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data Bayar Berhasil Diinput!');
		document.location='home-admin.php?page=list-pinjaman';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Pembayaran Gagal Diinput, Silahkan diulangi!";
	}
	}
	//Tutup koneksi engine MySQL
	// mysql_close($Open);
?>
</body>