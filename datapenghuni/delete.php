<?php
require_once "../_config/config.php";


$result = mysqli_query($con, "DELETE FROM tb_penghuni WHERE id_penghuni = '$_GET[id]'") or die (mysqli_error($con));
echo "<script>window.location='data.php';</script>";

?>