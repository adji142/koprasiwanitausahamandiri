<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<div style="border:0; padding:10px; width:924px; height:auto;"><br /><br /><br /><br /><br />
			<div class="container">
				<div class="row">
				<h2>Cari Data Member</h2>
				<hr />
				</div>
				<div class="row-fluid">
				<form action="home-admin.php?page=form-showtrx" method="post">
				<select class="selectpicker" data-show-subtext="true" data-live-search="true" name = "user">
				<?php 
					$koneksi=mysqli_connect("koprasiwanitausahamandiri.com", "u6018530_root", "admin123","u6018530_koperasi_new");
					$Cari="SELECT * FROM member";
					$Tampil = mysqli_query($koneksi,$Cari);
					while (	$hasil = mysqli_fetch_array ($Tampil)) {
						$username= stripslashes ($hasil['username']);
						$nama 	= stripslashes ($hasil['nama']);
						$nik 	= stripslashes ($hasil['nik']);
						$no_hp	= stripslashes ($hasil['no_hp']);
					{
				?>
				
					<option data-subtext=<?=$nama?> values = <?=$username?> ><?=$username?></option>
				
				<?php
						}
					}
				//Tutup koneksi engine MySQL
					mysqli_close($koneksi);
				?>
				</select>
				<button type = "submit" class="btn btn-primary">Search</button>
				</form>
				
				</div>
			</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>