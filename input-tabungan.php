<body bgcolor="#EEF2F7">
<?php
	include "koneksi.php";
	$username	= $_POST['username'];
	$nama		= $_POST['nama'];
	$tgl_tabungan	= $_POST['thn_tabungan']."-".$_POST['bln_tabungan']."-".$_POST['tgl_tabungan'];
	$jml_tabungan	= $_POST['jml_tabungan'];
	//validasi data jika data kosong
	if (empty($_POST['jml_tabungan'])) {
	?>
		<script language="JavaScript">
			alert('Masukan Jumlah tabungan!');
			document.location='home-admin.php?page=list-tabungan';
		</script>
	<?php
	}
	else {
	//Masukan data ke Table tabungan
	$input	="INSERT INTO tabungan (username, nama, tgl_tabungan, jml_tabungan) VALUES ('$username','$nama','$tgl_tabungan','$jml_tabungan')";
	$query_input =mysqli_query($Open,$input);
	//Update tabungan di tabel member
	$update="UPDATE member SET tabungan=tabungan + $jml_tabungan WHERE username='$username'";
	$query_update =mysqli_query($Open,$update);
		if ($query_update) {
		//Jika Sukses
	?>
		<script language="JavaScript">
		alert('Data tabungan Berhasil Diinput!');
		document.location='home-admin.php?page=list-tabungan';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "tabungan Gagal Diinput, Silahkan diulangi!";
	}
	}
	//Tutup koneksi engine MySQL
	// mysql_close($Open);
?>
</body>