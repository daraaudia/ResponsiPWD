<?php
require_once "../_config/config.php";

if (isset($_POST['add'])) {
    
    $id_penghuni = $_POST['id_penghuni'];
    $nama_penghuni = $_POST['nama_penghuni'];
    $alamat_penghuni = $_POST['alamat_penghuni'];
    $jk_penghuni = $_POST['jk_penghuni'];
    $noKTP_penghuni = $_POST['noKTP_penghuni'];
    $noHP_penghuni = $_POST['noHP_penghuni'];
    $no_kamar = $_POST['no_kamar'];
    $tgl_checkin = $_POST['tgl_checkin'];
    $tgl_checkout = $_POST['tgl_checkout'];
    mysqli_query($con, "INSERT INTO tb_penghuni (id_penghuni, nama_penghuni, alamat_penghuni, jk_penghuni, noKTP_penghuni, noHP_penghuni, no_kamar, tgl_checkin, tgl_checkout) VALUES ('$id_penghuni', '$nama_penghuni', '$alamat_penghuni', '$jk_penghuni', '$noKTP_penghuni', '$noHP_penghuni', '$no_kamar', '$tgl_checkin', '$tgl_checkout')") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_penghuni = $_POST['nama_penghuni'];
    $alamat_penghuni = $_POST['alamat_penghuni'];
    $jk_penghuni = $_POST['jk_penghuni'];
    $noKTP_penghuni = $_POST['noKTP_penghuni'];
    $noHP_penghuni = $_POST['noHP_penghuni'];
    $no_kamar = $_POST['no_kamar'];
    $tgl_checkin = $_POST['tgl_checkin'];
    $tgl_checkout = $_POST['tgl_checkout'];
    mysqli_query($con, "UPDATE tb_penghuni SET nama_penghuni = '$nama_penghuni', alamat_penghuni = '$alamat_penghuni', jk_penghuni = '$jk_penghuni', noHP_penghuni = '$noHP_penghuni', no_kamar = '$no_kamar', tgl_checkin = '$tgl_checkin', tgl_checkout = '$tgl_checkout' WHERE id_penghuni = '$id'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}
?>