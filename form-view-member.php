<div style="border:0; padding:10px; width:924spx; height:auto;"><br />
<center><font color="orange" size="2"><b>View All Member</b></font></center><br />
<input type="button" value="Tambah Member" onclick=location.href="home-admin.php?page=form-input-member" title="Add Member"><br /><br />
<table width="924" border="0" align="center" cellpadding="0" cellspacing="0">
<tr bgcolor="#FF6600">
	<th width="5%">No</td>&nbsp;
	<th width="15%" height="42">USERNAME</td>&nbsp;
	<th width="28%">NAMA</td>&nbsp;
	<th width="15%">NIK</td>&nbsp;
	<th width="20%">NO HP</td>&nbsp;
	<th width="17%">Action</td>&nbsp;     
</tr>
<?php
	$koneksi=mysqli_connect("koprasiwanitausahamandiri.com", "u6018530_root", "admin123","u6018530_koperasi_new");
	$Cari="SELECT * FROM member";
	$Tampil = mysqli_query($koneksi,$Cari);
	$nomer=0;
    while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$username= stripslashes ($hasil['username']);
			$nama 	= stripslashes ($hasil['nama']);
			$nik 	= stripslashes ($hasil['nik']);
			$no_hp	= stripslashes ($hasil['no_hp']);
		{
	$nomer++;
?>
	<tr align="center" bgcolor="#DFE6EF">
		<td>&nbsp;</td>
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
		<td><?=$nik?><div align="center"></div></td>
		<td><?=$no_hp?><div align="center"></div></td>
		<td bgcolor="#EEF2F7"><div align="center"><a href="home-admin.php?page=view-detail-member&username=<?=$username?>">Detail</a> | <a href="home-admin.php?page=hapus-member&username=<?=$username?>">Hapus</a></div></td>
	</tr>
	<tr align="center" bgcolor="#DFE6EF">
		<td>&nbsp;</td>
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
	mysqli_close($koneksi);
?>
</table>
</div>