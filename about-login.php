<html>
<head>
	<style type="text/css">
		div#content{float:center; padding:0px 0 15px 0; margin:70px 50px 110px 50px; background-color:#FFF;}
	</style>
</head>
<body>
<div style="border:0; padding:10px; width:924px; height:auto;">
<center><div id="content">
	<table cellpadding="0" cellspacing="5" bgcolor="#B0C4DE">
		<tr height="36" bgcolor="#F8F8FF">
			<th colspan="5">Your Login Detail</th>
		</tr>
		<tr>
			<td>
				<table>
					<tr><br />
						<td><img src="image/user.jpg" width="100" height="100" /></td>
						<td style="vertical-align: top" width="300">
						Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $_SESSION['username'];?><br />
						Nama Anda&nbsp;&nbsp;&nbsp;: <?php echo $_SESSION['nama'];?><br />
						Hak Akses&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $_SESSION['hak_akses'];?><br />
						</td>
					</tr>
					<tr height="5">
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
</center>
</div>
</body>
</html>