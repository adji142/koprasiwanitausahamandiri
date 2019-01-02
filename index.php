<?php
ob_start();
session_start();
?>
<html>
<head>
	<title>Koperasi Simpan Pinjam Online</title>
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
					<li><a href="index.php?page=home" title="Home"><u>H</u>ome</a></li>
					<li><a href="index.php?page=form-login" title="Login"><u>L</u>ogin</a></li>
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
				<tr>
					<td width="938" valign="top">
						<?php
						$page = (isset($_GET['page']))? $_GET['page'] : "main";
						switch ($page) {
							case 'form-login' : include "form-login.php"; break;
							case 'login' : include "login.php"; break;
							case 'main' :
							default : include 'home.php';	
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
		<td height="36" colspan="5" bgcolor="#B0C4DE"><div align="right" style="margin:0 12px 0 0;"><font color="#000">Copyright &copy; 2015. By RajaPutraMedia.Com</font><br></div></td>
	</tr>
</table>
<div align="center"></div>
</body>
</html>