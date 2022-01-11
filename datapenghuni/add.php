<?php include_once('../_header.php');?>

<div class="box">
    <h1>Data Penghuni</h1>
    <h4>
        <small>Tambah Data</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"> Kembali</i></a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="id_penghuni">Id Penghuni</label>
                    <input type="text" name="id_penghuni" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="nama_penghuni">Nama Peghuni</label>
                    <input type="text" name="nama_penghuni" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="alamat_penghuni">Alamat Penghuni</label>
                    <input type="text" name="alamat_penghuni" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jk_penghuni">Jenis Kelamin : </label><br>
                    <div class="form-control">
                        <input type="radio" id="Perempuan" name="jk_penghuni" value="Perempuan" >
                        <label for="Perempuan">Perempuan</label>
                        <input type="radio" id="Laki-Laki" name="jk_penghuni" value="Laki-Laki">
                        <label for="Laki-Laki">Laki-Laki</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="noKTP_penghuni">No KTP Penghuni</label>
                    <input type="text" name="noKTP_penghuni" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="noHP_penghuni">No HP Penghuni</label>
                    <input type="text" name="noHP_penghuni" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="no_kamar">Nomor Kamar</label>
                    <input type="text" name="no_kamar" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tgl_checkin">Tanggal Check In</label>
                    <input type="date" name="tgl_checkin" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tgl_checkout">Tanggal Check Out</label>
                    <input type="date" name="tgl_checkout" class="form-control" required>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="add" value="add" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../_footer.php');?>