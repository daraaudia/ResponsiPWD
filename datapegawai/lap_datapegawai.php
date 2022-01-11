<?php
// memanggil library FPDF
require('../fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SISTEM INFORMASI PERHOTELAN',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR PEGAWAI',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'ID Type',1,0);
$pdf->Cell(35,6,'NAMA PEGAWAI',1,0);
$pdf->Cell(30,6,'JABATAN',1,0);
$pdf->Cell(30,6,'JENIS KELAMIN',1,0);
$pdf->Cell(25,6,'ALAMAT',1,0);
$pdf->Cell(35,6,'NO HP',1,0);
$pdf->Cell(20,6,'SHIFT',1,1);
$pdf->SetFont('Arial','',10);

include '../_config/config.php';
$tb_pegawai = mysqli_query($con, "select * from tb_pegawai");
while ($row = mysqli_fetch_array($tb_pegawai)){
 $pdf->Cell(15,6,$row['id_pegawai'],1,0);
 $pdf->Cell(35,6,$row['nama_pegawai'],1,0);
 $pdf->Cell(30,6,$row['jabatan'],1,0);
 $pdf->Cell(30,6,$row['jk_pegawai'],1,0);
 $pdf->Cell(25,6,$row['alamat_pegawai'],1,0);
 $pdf->Cell(35,6,$row['noHP_pegawai'],1,0);
 $pdf->Cell(20,6,$row['shift'],1,1); 
}
$pdf->Output();
?>