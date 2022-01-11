<?php
// memanggil library FPDF
require('../fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(250,7,'SISTEM INFORMASI PERHOTELAN',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(250,7,'DAFTAR PENGHUNI',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(15,6,'ID Type',1,0);
$pdf->Cell(35,6,'NAMA PENGHUNI',1,0);
$pdf->Cell(30,6,'ALAMAT',1,0);
$pdf->Cell(30,6,'JENIS KELAMIN',1,0);
$pdf->Cell(30,6,'NO KTP',1,0);
$pdf->Cell(35,6,'NO HP',1,0);
$pdf->Cell(25,6,'NO KAMAR',1,0);
$pdf->Cell(25,6,'CHECK IN',1,0);
$pdf->Cell(25,6,'CHECK OUT',1,1);
$pdf->SetFont('Arial','',10);

include '../_config/config.php';
$tb_penghuni = mysqli_query($con, "select * from tb_penghuni");
while ($row = mysqli_fetch_array($tb_penghuni)){
 $pdf->Cell(15,6,$row['id_penghuni'],1,0);
 $pdf->Cell(35,6,$row['nama_penghuni'],1,0);
 $pdf->Cell(30,6,$row['alamat_penghuni'],1,0);
 $pdf->Cell(30,6,$row['jk_penghuni'],1,0);
 $pdf->Cell(30,6,$row['noKTP_penghuni'],1,0);
 $pdf->Cell(35,6,$row['noHP_penghuni'],1,0);
 $pdf->Cell(25,6,$row['no_kamar'],1,0);
 $pdf->Cell(25,6,$row['tgl_checkin'],1,0);
 $pdf->Cell(25,6,$row['tgl_checkout'],1,1);
}
$pdf->Output();
?>