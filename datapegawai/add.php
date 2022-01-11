<?php include_once('../_header.php');?>

<div class="box">
    <h1>Data Pegawai</h1>
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
                    <label for="id_pegawai">Id Pegawai</label>
                    <input type="text" name="id_pegawai" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="nama_pegawai">Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan : </label>
                    <select class="form-control" name="jabatan" id="jabatan">
                        <option value="Manajer">Manajer</option>
                        <option value="Resepsionis">Resepsionis</option>
                        <option value="Housekeeping">Housekeeping</option>
                        <option value="Room Service">Room Service</option>
                        <option value="Waiters">Waiters</option>
                        <option value="Staff Dapur">Staff Dapur</option>
                        <option value="Cleaning Service">Cleaning Service</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jk_pegawai">Jenis Kelamin : </label><br>
                    <div class="form-control">
                        <input type="radio" id="Perempuan" name="jk_pegawai" value="Perempuan" >
                        <label for="Perempuan">Perempuan</label>
                        <input type="radio" id="Laki-Laki" name="jk_pegawai" value="Laki-Laki">
                        <label for="Laki-Laki">Laki-Laki</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat_pegawai">Alamat</label>
                    <textarea name="alamat_pegawai" id="alamat_pegawai" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="noHP_pegawai">No HP</label>
                    <input type="text" name="noHP_pegawai" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="shift">Shift : </label><br>
                    <div class="form-control">
                        <input type="radio" id="Pagi" name="shift" value="Pagi" >
                        <label for="Pagi">Pagi</label>
                        <input type="radio" id="Malam" name="shift" value="Malam">
                        <label for="Malam">Malam</label>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="add" value="add" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../_footer.php');?>