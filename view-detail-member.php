<div style="border:0; padding:10px; width:924px; height:auto;">
	<?php
	include "koneksi.php";
	if (isset($_GET['username'])) {
		$username = $_GET['username'];
	}
	else {
	die ("Error. No ID Selected! ");	
	}
//Tampilkan data dari tabel member
	$query = "SELECT * FROM member WHERE username='$username'";
	$sql = mysqli_query ($Open,$query);
	$hasil = mysqli_fetch_array ($sql);
	$username	= $hasil['username'];
	$password	= $hasil['password'];
	$nama	= $hasil['nama'];
	$nik	= $hasil['nik'];
	list($thn_lahir,$bln_lahir,$tgl_lahir) = explode ("-",$hasil['tgl_lahir']);
	$jenis_kelamin	= $hasil['jenis_kelamin'];
	$pekerjaan	= $hasil['pekerjaan'];
	$alamat		= $hasil['alamat'];
	$email		= $hasil['email'];
	$no_hp		= $hasil['no_hp'];
	$tabungan		= $hasil['tabungan'];
	$pinjaman		= $hasil['pinjaman'];
?>
	<input type="button" value="Kembali" onclick=location.href="home-admin.php?page=form-view-member" title="Kembali">
	<table width="860" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor="#DFE6EF" height="30">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><b>Detail Data Member <u><i><?=$username?></i></u></b></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Username</td>
			<td>:&nbsp;<?=$username?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Password</td>
			<td>:&nbsp;<?=$password?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nama Member</td>
			<td>:&nbsp;<?=$nama?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>NIK</td>
			<td>:&nbsp;<?=$nik?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Tanggal Lahir</td>
			<td>:&nbsp;<?=$tgl_lahir?>-<?=$bln_lahir?>-<?=$thn_lahir?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Jenis Kelamin</td>
			<td>:&nbsp;<?=$jenis_kelamin?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Pekerjaan</td>
			<td>:&nbsp;<?=$pekerjaan?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Alamat</td>
			<td>:&nbsp;<?=$alamat?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Email</td>
			<td>:&nbsp;<?=$email?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nomor HP</td>
			<td>:&nbsp;<?=$no_hp?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Tabungan</td>
			<td>:&nbsp;<?=$tabungan?></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Pinjaman</td>
			<td>:&nbsp;<?=$pinjaman?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td height="32">&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
<?php
//Tutup koneksi engine MySQL
	// mysql_close($Open);
?>
</div>