<?php include_once('../_header.php');?>

<div class="box">
    <h1>Data Pegawai</h1>
    <h4>
        <small>Edit Data Pegawai</small>
        <div class="pull-right">
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"> Kembali</i></a>
        </div>
    </h4>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <?php
            $id = @$_GET['id'];
            $sql_pegawai = mysqli_query($con, "SELECT * FROM tb_pegawai WHERE id_pegawai = '$id'") or die (mysqli_error($con));
            $data = mysqli_fetch_array($sql_pegawai);
            ?>
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="id_pegawai">Id Pegawai</label>
                    <input type="text"  name="id" id="id_pegawai" value="<?=$data['id_pegawai']?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_pegawai">Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" id="nama_pegawai" value="<?=$data['nama_pegawai']?>" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan : </label>
                    <select class="form-control" name="jabatan" id="jabatan" value="<?=$data['jabatan']?>">
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
                        <input type="radio" id="Perempuan" name="jk_pegawai" value="Perempuan" value="<?=$data['jk_pegawai']?>">
                        <label for="Perempuan">Perempuan</label>
                        <input type="radio" id="Laki-Laki" name="jk_pegawai" value="Laki-Laki" value="<?=$data['jk_pegawai']?>">
                        <label for="Laki-Laki">Laki-Laki</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat_pegawai">Alamat</label>
                    <input type="text" name="alamat_pegawai" id="alamat_pegawai"  value="<?=$data['alamat_pegawai']?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="noHP_pegawai">No HP Pegawai</label>
                    <input type="text" name="noHP_pegawai" id="noHP_pegawai"  value="<?=$data['noHP_pegawai']?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="shift">Shift : </label><br>
                    <div class="form-control">
                        <input type="radio" id="Pagi" name="shift" value="Pagi" value="<?=$data['shift']?>" >
                        <label for="Pagi">Pagi</label>
                        <input type="radio" id="Malam" name="shift" value="Malam" value="<?=$data['shift']?>">
                        <label for="Malam">Malam</label>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="edit" value="edit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../_footer.php');?>