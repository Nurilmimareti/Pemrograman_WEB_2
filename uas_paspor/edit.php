<?php
include "koneksi.php";

$id=$_GET['id'];

$data=mysqli_query($conn,"SELECT * FROM pendaftar WHERE no_daftar='$id'");

$d=mysqli_fetch_array($data);

if(isset($_POST['update'])){

$nama=$_POST['nama'];
$tgl=$_POST['tgl_daftar'];
$hari=$_POST['hari'];
$tanggal=$_POST['tanggal'];
$jam=$_POST['jam'];

mysqli_query($conn,"UPDATE pendaftar SET

nama_pemohon='$nama',
tgl_daftar='$tgl',
hari='$hari',
tanggal='$tanggal',
jam='$jam'

WHERE no_daftar='$id'");

header("location:data.php");

}
?>

<!DOCTYPE html>
<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Edit Data</h2>

<form method="POST">

<input class="form-control mb-3" name="nama" value="<?= $d['nama_pemohon']; ?>">

<input class="form-control mb-3" type="date" name="tgl_daftar" value="<?= $d['tgl_daftar']; ?>">

<input class="form-control mb-3" name="hari" value="<?= $d['hari']; ?>">

<input class="form-control mb-3" type="date" name="tanggal" value="<?= $d['tanggal']; ?>">

<input class="form-control mb-3" type="time" name="jam" value="<?= $d['jam']; ?>">

<button name="update" class="btn btn-success">
Update
</button>

</form>

</div>

</body>
</html>