<div style="border:0; padding:10px; width:924px; height:auto;">
<center><font color="orange" size="2"><b>Pinjaman Anda</b></font></center><br />
<table width="860" border="0" align="center" cellpadding="0" cellspacing="0">
<tr bgcolor="#FF6600">
	<th width="5%">No</td>&nbsp;
	<th width="15%" height="42">USERNAME</td>&nbsp;
	<th width="50%">NAMA</td>&nbsp;
	<th width="10%">Bunga (%)</td>&nbsp;
	<th width="30%">TOTAL PINJAM</td>&nbsp;     
</tr>
<?php
	include "koneksi.php";
	if (isset($_GET['username'])) {
		$username = $_GET['username'];
	}
	else {
	die ("Error. No ID Selected! ");	
	}
	$Cari="SELECT a.username,a.nama,a.pinjaman,b.bungapersen FROM member a left join pinjaman b on a.username = b.username WHERE a.username='$username'";
	$Tampil = mysqli_query($Open,$Cari);
	$nomer=0;
    while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$username= stripslashes ($hasil['username']);
			$nama 	= stripslashes ($hasil['nama']);
			$bunga = stripslashes ($hasil['bungapersen']);
			$pinjaman 	= stripslashes ($hasil['pinjaman']);
		{
	$nomer++;
?>
	<tr align="center" bgcolor="#DFE6EF">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<tr align="center">
		<td height="32"><?=$nomer?><div align="center"></div></td>
		<td><?=$username?><div align="center"></div></td>
		<td><?=$nama?><div align="center"></div></td>
		<td><?=$bunga?><div align="center"></div></td>
		<td><?=number_format($pinjaman)?><div align="center"></div></td>
	</tr>
	<tr align="center" bgcolor="#DFE6EF">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
<?php  
		}
	}
//Tutup koneksi engine MySQL
	// mysql_close($Open);
?>
</table>
</div>