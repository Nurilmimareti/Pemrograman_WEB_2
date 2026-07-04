<?php

include "koneksi.php";

$nama=$_POST['nama'];
$tgl=$_POST['tgl_daftar'];
$hari=$_POST['hari'];
$tanggal=$_POST['tanggal'];
$jam=$_POST['jam'];

mysqli_query($conn,"INSERT INTO pendaftar
(nama_pemohon,tgl_daftar,hari,tanggal,jam)
VALUES
('$nama','$tgl','$hari','$tanggal','$jam')");

header("location:data.php");

?>