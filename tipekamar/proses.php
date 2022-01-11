<?php
require_once "../_config/config.php";

if (isset($_POST['add'])) {
    
    $id_tipe = $_POST['id_tipe'];
    $nama_tipe = $_POST['nama_tipe'];
    $lantai = $_POST['lantai'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];
    mysqli_query($con, "INSERT INTO tb_tipekamar (id_tipe, nama_tipe, lantai, harga, keterangan) VALUES ('$id_tipe', '$nama_tipe', '$lantai', '$harga', '$keterangan')") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_tipe = $_POST['nama_tipe'];
    $lantai = $_POST['lantai'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];
    mysqli_query($con, "UPDATE tb_tipekamar SET nama_tipe = '$nama_tipe', lantai = '$lantai', harga = '$harga', keterangan = '$keterangan' WHERE id_tipe = '$id'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}
?>