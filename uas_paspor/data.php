<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>

<title>Pendaftaran Paspor</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2 class="text-center mb-4">
Form Pendaftaran Paspor
</h2>

<div class="card">

<div class="card-body">

<form action="simpan.php" method="POST">

<div class="mb-3">
<label>Nama Pemohon</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
<label>Tanggal Daftar</label>
<input type="date" name="tgl_daftar" class="form-control" required>
</div>

<div class="mb-3">
<label>Hari</label>
<input type="text" name="hari" class="form-control" required>
</div>

<div class="mb-3">
<label>Tanggal Datang</label>
<input type="date" name="tanggal" class="form-control" required>
</div>

<div class="mb-3">
<label>Jam Datang</label>
<input type="time" name="jam" class="form-control" required>
</div>

<button class="btn btn-primary">
Simpan
</button>

<a href="index.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

<hr>

<h3>Data Pendaftar</h3>

<table class="table table-bordered">

<tr>

<th>No</th>
<th>Nama</th>
<th>Tanggal Daftar</th>
<th>Hari</th>
<th>Tanggal Datang</th>
<th>Jam</th>
<th>Aksi</th>

</tr>

<?php

$no=1;

$data=mysqli_query($conn,"SELECT * FROM pendaftar");

while($d=mysqli_fetch_array($data)){

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['nama_pemohon']; ?></td>

<td><?= $d['tgl_daftar']; ?></td>

<td><?= $d['hari']; ?></td>

<td><?= $d['tanggal']; ?></td>

<td><?= $d['jam']; ?></td>

<td>

<a href="edit.php?id=<?= $d['no_daftar']; ?>" class="btn btn-warning btn-sm">
Edit
</a>

<a href="hapus.php?id=<?= $d['no_daftar']; ?>" class="btn btn-danger btn-sm">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>