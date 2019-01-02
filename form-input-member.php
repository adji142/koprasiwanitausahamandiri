<div style="border:0; padding:10px; width:924px; height:auto;">
<form action="home-admin.php?page=input-member" method="POST" name="form-input-member">
	<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="46">
				<td width="10%">&nbsp;</td>
				<td width="25%">&nbsp;</td>
				<td width="65%"><font color="orange" size="2"><b>Form Input Member</b></font></td>
			</tr>
		<tr>
			<td width="10%">&nbsp;</td>
			<td width="25%"><input type="button" value="Cancel" onclick=location.href="home-admin.php?page=form-view-member" title="Cancel"><br /><br /></td>
			<td width="65%">&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Username</td>
			<td><input type="text" name="username" size="25" maxlength="20" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Password</td>
			<td><input type="password" name="password" size="25" maxlength="20" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nama</td>
			<td><input type="text" name="nama" size="50" maxlength="45" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>NIK</td>
			<td><input type="text" name="nik" size="25" maxlength="20" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Tanggal Lahir</td>
			<td><select name="tgl_lahir">
				<?php
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						echo "<option value='$tg'>$tg</option>";	
					}
				?>
				</select> -
				<select name="bln_lahir">
				<?php
					for($bln=1;$bln<=12;$bln++){
						$nama_bln = array (1=>"Jan","Feb","Mar","Apr","Mei","Jun","Jul","Aug","Sep","Okt","Nov","Des");
						echo "<option value=$bln>$nama_bln[$bln]</option>";
					}
				?>
				</select> - 
				<select name="thn_lahir">
				<?php
					for ($i=1945; $i<=2020; $i++) {
						echo "<option value='$i'>$i</option>";	
					}
				?>
				</select>
			</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jenis_kelamin" value="L" checked> Laki-laki
				<input type="radio" name="jenis_kelamin" value="P"> Perempuan</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Pekerjaan</td>
			<td><input type="text" name="pekerjaan" size="25" maxlength="16" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Alamat</td>
			<td><input type="text" name="alamat" size="50" maxlength="80" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Email</td>
			<td><input type="text" name="email" size="40" maxlength="35" /></td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>Nomor HP</td>
			<td><input type="text" name="no_hp" size="25" maxlength="12" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr height="46">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Submit" value="Input">&nbsp;&nbsp;&nbsp;
				<input type="reset" name="reset" value="Reset"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>
</div>