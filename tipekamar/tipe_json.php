<?php
include "../_config/config.php";
$sql="select * from tb_tipekamar order by id_tipe";
$tampil = mysqli_query($con,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
 $h['id_tipe'] = $r['id_tipe'];
 $h['nama_tipe'] = $r['nama_tipe'];
 $h['lantai'] = $r['lantai'];
 $h['harga'] = $r['harga'];
 $h['keterangan'] = $r['keterangan'];
 array_push($response["data"], $h);
 }
 echo json_encode($response);
}
else {
 $response["message"]="tidak ada data";
 echo json_encode($response);
 }
?>