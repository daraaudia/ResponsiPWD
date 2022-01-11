<?php
require_once "../_config/config.php";

if (isset($_POST['add'])) {
    
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $jabatan = $_POST['jabatan'];
    $jk_pegawai = $_POST['jk_pegawai'];
    $alamat_pegawai = $_POST['alamat_pegawai'];
    $noHP_pegawai = $_POST['noHP_pegawai'];
    $shift = $_POST['shift'];
    mysqli_query($con, "INSERT INTO tb_pegawai (id_pegawai, nama_pegawai, jabatan, jk_pegawai, alamat_pegawai, noHP_pegawai, shift) VALUES ('$id_pegawai', '$nama_pegawai', '$jabatan', '$jk_pegawai', '$alamat_pegawai', '$noHP_pegawai', '$shift')") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $jabatan = $_POST['jabatan'];
    $jk_pegawai = $_POST['jk_pegawai'];
    $alamat_pegawai = $_POST['alamat_pegawai'];
    $noHP_pegawai = $_POST['noHP_pegawai'];
    $shift = $_POST['shift'];
    mysqli_query($con, "UPDATE tb_pegawai SET nama_pegawai = '$nama_pegawai', jabatan = '$jabatan', jk_pegawai = '$jk_pegawai', alamat_pegawai = '$alamat_pegawai', noHP_pegawai = '$noHP_pegawai', shift = '$shift' WHERE id_pegawai = '$id'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
}
?>