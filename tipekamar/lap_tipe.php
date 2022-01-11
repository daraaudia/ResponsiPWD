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
$pdf->Cell(190,7,'LAPORAN TYPE KAMAR',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'ID Type',1,0);
$pdf->Cell(50,6,'TYPE KAMAR',1,0);
$pdf->Cell(25,6,'LANTAI',1,0);
$pdf->Cell(50,6,'HARGA',1,0);
$pdf->Cell(30,6,'KETERANGAN',1,1);
$pdf->SetFont('Arial','',10);

include '../_config/config.php';
$tb_tipekamar = mysqli_query($con, "select * from tb_tipekamar");
while ($row = mysqli_fetch_array($tb_tipekamar)){
 $pdf->Cell(20,6,$row['id_tipe'],1,0);
 $pdf->Cell(50,6,$row['nama_tipe'],1,0);
 $pdf->Cell(25,6,$row['lantai'],1,0);
 $pdf->Cell(50,6,$row['harga'],1,0);
 $pdf->Cell(30,6,$row['keterangan'],1,1); 
}
$pdf->Output();
?>