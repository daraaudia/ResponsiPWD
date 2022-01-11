<?php include_once('../_header.php');?>

<div class="box">
    <h1>Data Penghuni</h1>
    <h4>
        <small>Edit Data Penghuni</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"> Kembali</i></a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <?php
            $id = @$_GET['id'];
            $sql_penghuni = mysqli_query($con, "SELECT * FROM tb_penghuni WHERE id_penghuni = '$id'") or die (mysqli_error($con));
            $data = mysqli_fetch_array($sql_penghuni);
            ?>
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="id_penghuni">Id Penghuni</label>
                    <input type="text"  name="id" id="id_penghuni" value="<?=$data['id_penghuni']?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_penghuni">Nama Penghuni</label>
                    <input type="text" name="nama_penghuni" id="nama_penghuni" value="<?=$data['nama_penghuni']?>" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="alamat_penghuni">Alamat</label>
                    <input type="text" name="alamat_penghuni" id="alamat_penghuni"  value="<?=$data['alamat_penghuni']?>" class="form-control" required>
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
                    <input type="text" name="noKTP_penghuni" id="noKTP_penghuni"  value="<?=$data['noKTP_penghuni']?>" class="form-control" required readonly>
                </div>
                <div class="form-group">
                    <label for="noHP_penghuni">No HP Penghuni</label>
                    <input type="text" name="noHP_penghuni" id="noHP_penghuni"  value="<?=$data['noHP_penghuni']?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="no_kamar">No Kamar</label>
                    <input type="text" name="no_kamar" id="no_kamar"  value="<?=$data['no_kamar']?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tgl_checkin">Tanggal Check In</label>
                    <input type="date" name="tgl_checkin" id="tgl_checkin"  value="<?=$data['tgl_checkin']?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tgl_checkout">Jenis Kelamin</label>
                    <input type="date" name="tgl_checkout" id="tgl_checkout"  value="<?=$data['tgl_checkout']?>" class="form-control" required>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="edit" value="edit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../_footer.php');?>