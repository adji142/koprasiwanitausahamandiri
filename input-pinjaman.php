<body bgcolor="#EEF2F7">
<?php
	include "koneksi.php";
	$username	= $_POST['username'];
	$nama		= $_POST['nama'];
	// $tgl_transaksi	= $_POST['thn_transaksi']."-".$_POST['bln_transaksi']."-".$_POST['tgl_transaksi'];
	$tgl_transaksi	= $_POST['tgltransaksi'];
	$jml_transaksi	= $_POST['jml_transaksi'];
	$bunga	= $_POST['bunga'];
	//validasi data jika data kosong
	if (empty($_POST['jml_transaksi'])) {
	?>
		<script language="JavaScript">
			alert('Masukan Jumlah transaksi!');
			document.location='home-admin.php?page=list-pinjaman';
		</script>
	<?php
	}
	else {
	$bungarupiah = $jml_transaksi*$bunga/100;
	//Masukan data ke Table pinjaman
	$input	="INSERT INTO pinjaman (username, nama, tgl_transaksi, jml_transaksi,bungapersen,bungarupiah) VALUES ('$username','$nama','$tgl_transaksi','$jml_transaksi','$bunga','$bungarupiah')";
	$query_input =mysqli_query($Open,$input);
	//Update pinjaman di tabel member
	$update="UPDATE member SET pinjaman=pinjaman + $jml_transaksi + $bungarupiah WHERE username='$username'";
	$query_update =mysqli_query($Open,$update);
		if ($query_update) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data Pinjaman Berhasil Diinput!');
		document.location='home-admin.php?page=list-pinjaman';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Pinjaman Gagal Diinput, Silahkan diulangi!";
	}
	}
	//Tutup koneksi engine MySQL
	// mysql_close($Open);
?>
</body>