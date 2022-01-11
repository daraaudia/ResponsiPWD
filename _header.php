<?php
require_once "_config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Aplikasi Perhotelan</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>/_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/_assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?=base_url()?>/_assets/libs/DataTables/datatables.min.css" rel="stylesheet">
    <link rel="icon" href="<?=base_url()?>/_assets/logo.png">
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
</head>
    <style>
        body{
            background-image: url("../_assets/img/bg.png");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
<body>
    <script src="<?=base_url('_assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('_assets/libs/DataTables/datatables.min.js')?>"></script>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?=base_url('dashboard')?>">Sistem Informasi Hotel</span></a>
                </li>
                <li>
                    <a href="<?=base_url('dashboard')?>">Dashboard</a>
                </li>
                <li>
                    <a href="<?=base_url('datapenghuni')?>">Data Penghuni</a>
                </li>
                <li>
                    <a href="<?=base_url('datapegawai')?>">Data Pegawai</a>
                </li>
                <li>
                    <a href="<?=base_url('tipekamar/data.php')?>">Tipe Kamar</a>
                </li>
                <li>
                    <a href="<?=base_url('auth/logout.php')?>"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        
        <div id="page-content-wrapper">
            <div class="container-fluid">