<?php 
    session_start();
    $hak_akses = $_SESSION['hak_akses'];
    if(!isset($_SESSION['username']) && $hak_akses!="Member"){
		?>
			<script language="JavaScript">
				alert('Anda Bukan Member. Silahkan Login kembali!');
				document.location='index.php';
			</script>
		<?php
    }
?>
<html>
<head>
	<title>Koperasi Simpan Pinjam Online | Member</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td width="964" bgcolor="#B0C4DE"><img src="image/header.png" width="964" height="130" /></td>
	</tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td><hr></td>
	</tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#F8F8FF" height="32">
		<td width="10">&nbsp;</td>
		<td width="944">
			<div class="nav">
				<ul>
					<li><a href="home-member.php?page=lihat-pinjaman-member&username=<?=$_SESSION['username']?>" title="Pinjaman"><u>P</u>injaman</a></li>
					<li><a href="home-member.php?page=lihat-tabungan-member&username=<?=$_SESSION['username']?>" title="Tabungan"><u>T</u>abungan</a></li>
					<li><a href="home-member.php?page=pro-version" title="View"><u>V</u>iew Transaction</a></li>
					<li><a href="home-member.php?page=profil-member&username=<?=$_SESSION['username']?>" title="Profil Saya"><u>P</u>rofil Saya</a></li>
					<li><a href="login/logout.php" title="Log out"><u>L</u>og out</a></li>
				</li>
			</div>
		</td>
		<td width="10">&nbsp;</td>
	</tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#F8F8FF">
		<td>&nbsp;</td>
	</tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#F8F8FF">
		<td width="10">&nbsp;</td>
		<td rowspan="4" valign="top">
			<table width="938" height="auto" bgcolor="white" border="0" cellspacing="0" cellpadding="0">
				<tr height="36" width="938">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo "Tanggal : ".date("d-M-y");?></strong>&nbsp;&nbsp;&nbsp;&nbsp;Selamat Datang <u><strong> <?=$_SESSION['nama']?></strong></u></td>
				</tr>
				<tr>
					<td width="938" valign="top">
						<?php
						$page = (isset($_GET['page']))? $_GET['page'] : "main";
						switch ($page) {
							case 'lihat-pinjaman-member' : include "lihat-pinjaman-member.php"; break;
							case 'lihat-tabungan-member' : include "lihat-tabungan-member.php"; break;
							case 'profil-member' : include "profil-member.php"; break;
							case 'form-edit-profil-member' : include "form-edit-profil-member.php"; break;
							case 'pro-version' : include "pro-version.php"; break;
							case 'main' :
							default : include 'about-login.php';	
						}
						?>
					</td>	
				</tr>
			</table>
		</td>
		<td width="10">&nbsp;</td>
	</tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#F8F8FF">
		<td>&nbsp;</td>
	</tr>
</table>
<table width="964" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr bgcolor="#B0C4DE">
		<td height="36" colspan="5" bgcolor="#B0C4DE"><div align="right" style="margin:0 12px 0 0;"><font color="#000">Copyright &copy; 2018. By AISSystem</font><br></div></td>
	</tr>
</table>
<div align="center"></div>
</body>
</html>