<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
<?php  
include "koneksi.php";
$member = $_POST['user'];
?>
<div style="border:0; padding:10px; width:924px; height:auto;"><br /><br /><br /><br /><br />
<div class="container">
<h3>Rekapitulasi Mutasi Saldo</h3>
<!-- <a href = "home-admin.php?page=print&username=<?=$member?>" class="btn btn-primary">Print Rekap</a> -->
    <div class="row">
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Pinjaman
                </button>
            </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Tgl Peminjaman</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Bunga(%)</th>
                        <th scope="col">Total Pinjaman</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- fill table -->
                        <?php
                           
                            $Cari="SELECT * FROM pinjaman where username = '$member'";
                            $Tampil = mysqli_query($Open,$Cari);
                            $nomer=0;
                            while (	$hasil = mysqli_fetch_array ($Tampil)) {
                                $nama= stripslashes ($hasil['nama']);
                                $tgl 	= stripslashes ($hasil['tgl_transaksi']);
                                $pinjaman 	= stripslashes ($hasil['jml_transaksi']);
                                $bunga   = stripslashes ($hasil['bungapersen']);
                                $total   = stripslashes ($hasil['jml_transaksi']+$hasil['bungarupiah']);
                            {
                                $nomer++;
                        ?>
                        <tr>
                            <th scope="row"><?=$nomer?></th>
                            <td><?=$nama?></td>
                            <td><?=$tgl?></td>
                            <td><?=$pinjaman?></td>
                            <td><?=$bunga?></td>
                            <td><?=$total?></td>
                        </tr>
                        <?php
                            }}
                        ?>
                </tbody>
            </table>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Pembayaran
                </button>
            </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Tgl Pembayaran</th>
                        <th scope="col">Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- fill table -->
                        <?php
                           
                            $Cari="SELECT * FROM bayar where username = '$member'";
                            $Tampil = mysqli_query($Open,$Cari);
                            $nomer=0;
                            while (	$hasil = mysqli_fetch_array ($Tampil)) {
                                $nama= stripslashes ($hasil['nama']);
                                $tgl 	= stripslashes ($hasil['tgl_bayar']);
                                $bayar 	= stripslashes ($hasil['jml_bayar']);
                            {
                                $nomer++;
                        ?>
                        <tr>
                            <th scope="row"><?=$nomer?></th>
                            <td><?=$nama?></td>
                            <td><?=$tgl?></td>
                            <td><?=$bayar?></td>
                        </tr>
                        <?php
                            }}
                        ?>
                </tbody>
            </table>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Tabungan
                </button>
            </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Peminjam</th>
                        <th scope="col">Saldo Per Tgl</th>
                        <th scope="col">Debet</th>
                        <th scope="col">Kredit</th>
                        <th scope="col">Saldo</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                           
                            $Cari="
                            select a.username,a.nama,NOW() tgl,SUM(COALESCE(a.jml_tabungan,0)) Debet , SUM(COALESCE(b.jml_ambil,0)) Kredit,
                            SUM(COALESCE(a.jml_tabungan,0)) - SUM(COALESCE(b.jml_ambil,0)) Saldo from tabungan a
                            left join ambil_tabungan b on a.username = b.username
                            where a.username = '$member'
                            group by a.username
                            ";
                            $Tampil = mysqli_query($Open,$Cari);
                            $nomer=0;
                            while (	$hasil = mysqli_fetch_array ($Tampil)) {
                                $nama= stripslashes ($hasil['nama']);
                                $tgl 	= stripslashes ($hasil['tgl']);
                                $Debet 	= stripslashes ($hasil['Debet']);
                                $Kredit 	= stripslashes ($hasil['Kredit']);
                                $Saldo 	= stripslashes ($hasil['Saldo']);
                            {
                                $nomer++;
                        ?>
                        <tr>
                            <th scope="row"><?=$nomer?></th>
                            <td><?=$nama?></td>
                            <td><?=$tgl?></td>
                            <td><?=$Debet?></td>
                            <td><?=$Kredit?></td>
                            <td><?=$Saldo?></td>
                        </tr>
                        <?php
                            }}
                        ?>
                </tbody>
            </table>
            </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>