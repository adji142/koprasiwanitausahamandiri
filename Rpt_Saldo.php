<?php
$member = $_GET['username'];
// pendefinisian folder font pada FPDF
define('FPDF_FONTPATH', 'FPDF/font/');
require('FPDF/fpdf.php');
// seperti sebelunya, kita membuat class anakan dari class FPDF 
class PDF extends FPDF{
	function Header(){
	//$this->Image('logo.png',1,1,2.25); 
	// logo   
	$this->SetTextColor(128,0,0); 
	// warna tulisan   
	$this->SetFont('Arial','B','14'); 
	// font yang digunakan  
	 // membuat cell dg panjang 19 dan align center 'C'  
	$this->Cell(25,1,'KOPRASI WANITA USAHA MANDIRI',0,0,'C');   
	$this->Ln();   
	$this->SetFont('times','B','12'); 
	$this->Cell(25,1,'Laporan Rekapitulasi Mutasi Saldo '.$member.' Koprasi Wanita Usaha Mandiri',0,0,'C');
	$this->Ln();
	$this->Cell(25,1,'Printed By '.$member.' at '.date("Y-m-d").'/'.date("h:i:s").'',0,0,'C');
	$this->Ln();   
	$this->SetFont('Arial','B','9');   
	$this->SetFillColor(192,192,192); 
	// warna isi   
	$this->SetTextColor(0,0,0); 
	// warna teks untuk th   
	$this->Cell(1);   
	$this->Cell(1,1,'No','TB',0,'L',1); 
	// cell dengan panjang 1   
	$this->Cell(2,1,'SG','TB',0,'L',1); 
	// cell dengan panjang 1   
	$this->Cell(5,1,'Nama Anak','TB',0,'L',1); 
	// cell dengan panjang 2   
	$this->Cell(3,1,'Kelas Usia','TB',0,'L',1); 
	$this->Cell(3,1,'Date','TB',0,'L',1);
	$this->Cell(2,1,'Check In','TB',0,'L',1); 
	$this->Cell(2,1,'Check out','TB',0,'L',1); 
	$this->Cell(3,1,'Kegiatan','TB',0,'L',1); 
	$this->Cell(2,1,'Author','TB',0,'L',1); 
	$this->Cell(3,1,'Sum Time','TB',0,'L',1); 
	// cell dengan panjang 3   
	// panjang cell bisa disesuaikan   
	$this->Ln();  }  
	function Footer(){    
		$this->SetY(-2,5);   
		$this->Cell(0,1,$this->PageNo(),0,0,'C');  
		}  
		} 
		$server = "localhost"; 
		$user = "root"; 
		$pass = ""; 
		$data = "ppa"; 
		$net = new mysqli($server, $user, $pass,$data); 
		if($net->connect_error){   
			die("Koneksi gagal: ".$net->connect_error); 
			} 
			$q = "select SG, nama_anak,kelas_usia,date,check_in,check_out,kegiatan,mentor,timediff(check_out,check_in) as 'time' from abs_log where kegiatan = '$jadwal'"; 
			$h = $net->query($q) or die($net->error); $i = 0;  
			while($d=$h->fetch_array()){   
				$cell[$i][0]=$d[0];  
				$cell[$i][1]=$d[1];  
				$cell[$i][2]=$d[2];  
				$cell[$i][3]=$d[3];
				$cell[$i][4]=$d[4];
				$cell[$i][5]=$d[5];  
				$cell[$i][6]=$d[6];  
				$cell[$i][7]=$d[7]; 
				$cell[$i][8]=$d[8]; 
				$i++; } 
				// orientasi Potrait 
				// ukuran cm 
				// kertas A4 
				$pdf = new PDF('L','cm','A4'); 
				$pdf->Open(); 
				$pdf->AliasNbPages(); 
				$pdf->AddPage(); 
				$pdf->SetFont('Arial','','8'); 
				//perulangan untuk membuat tabel 
				for($j=0;$j<$i;$j++){   
					$pdf->Cell(1);  
					$pdf->Cell(1,1,$j+1,'B',0,'C');  
					$pdf->Cell(2,1,$cell[$j][0],'B',0,'C');  
					$pdf->Cell(5,1,$cell[$j][1],'B',0,'L');  
					$pdf->Cell(3,1,$cell[$j][2],'B',0,'L');  
					$pdf->Cell(3,1,$cell[$j][3],'B',0,'C');
					$pdf->Cell(2,1,$cell[$j][4],'B',0,'L');  
					$pdf->Cell(2,1,$cell[$j][5],'B',0,'L');
					$pdf->Cell(3,1,$cell[$j][6],'B',0,'L');  
					$pdf->Cell(2,1,$cell[$j][7],'B',0,'L');
					$pdf->Cell(3,1,$cell[$j][8],'B',0,'L');
					$pdf->Ln(); } 
					$pdf->Output(); 
					// ditampilkan
					?>