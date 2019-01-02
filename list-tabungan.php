<div style="border:0; padding:10px; width:924px; height:auto;"><br />
<center><font color="orange" size="2"><b>List Tabungan Member</b></font></center><br /><br />
<table width="924" border="0" align="center" cellpadding="0" cellspacing="0">
<tr bgcolor="#FF6600">
	<th width="5%">No</td>&nbsp;
	<th width="10%" height="42">USERNAME</td>&nbsp;
	<th width="40%">NAMA</td>&nbsp;
	<th width="20%">TOTAL Tabungan</td>&nbsp;
	<th width="25%">Action</td>&nbsp;     
</tr>
<?php
	include "koneksi.php";
	$Cari="SELECT * FROM member";
	$Tampil = mysqli_query($Open,$Cari);
	$nomer=0;
    while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$username= stripslashes ($hasil['username']);
			$nama 	= stripslashes ($hasil['nama']);
			$tabungan 	= stripslashes ($hasil['tabungan']);
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
		<td><?=$tabungan?><div align="center"></div></td>
		<td bgcolor="#EEF2F7"><div align="center"><a href="home-admin.php?page=form-input-tabungan&username=<?=$username?>">Input Tabungan</a> | <a href="home-admin.php?page=form-ambil-tabungan&username=<?=$username?>">Ambil Tabungan</a></div></td>
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