<?php
include "../_config/config.php"; 
header('Content-Type: text/xml');
$query = "SELECT * FROM tb_tipekamar";
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<tipekamar>";
 echo"<id_tipe>",$data['id_tipe'],"</id_tipe>";
 echo"<nama_tipe>",$data['nama_tipe'],"</nama_tipe>";
 echo"<lantai>",$data['lantai'],"</lantai>";
 echo"<harga>",$data['harga'],"</harga>";
 echo"<keterangan>",$data['keterangan'],"</keterangan>";
 echo "</tipekamar>";
}
echo "</data>";
?>