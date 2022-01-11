<?php include_once('../_header.php');?>

<div class="box">
    <h1>TYPE KAMAR</h1>
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
                    <label for="id_tipe">Id Type</label>
                    <input type="text" name="id_tipe" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="nama_tipe">Nama Type</label>
                    <input type="text" name="nama_tipe" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <label for="lantai">Lantai</label>
                    <input type="text" name="lantai" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control" required></textarea>
                </div>
                <div class="form-group pull-right">
                    <input type="submit" name="add" value="add" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('../_footer.php');?>
<script>
    CKEDITOR.replace( 'keterangan' );
</script>