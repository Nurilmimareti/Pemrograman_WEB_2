<?php
include "koneksi.php";

if(isset($_POST['simpan'])){

$no_daftar=$_POST['no_daftar'];
$ktp=$_POST['ktp'];
$kk=$_POST['kk'];
$ijazah=$_POST['ijazah'];

if($ktp=="Ada" && $kk=="Ada" && $ijazah=="Ada"){
    $keterangan="OK";
}else{
    $keterangan="Belum Lengkap";
}

$q=mysqli_query($conn,"SELECT MAX(no_antrian) as antri FROM daftar_ulang");
$r=mysqli_fetch_assoc($q);

$antrian=$r['antri']+1;

mysqli_query($conn,"INSERT INTO daftar_ulang(no_daftar,ktp,kk,ijazah,keterangan,no_antrian)
VALUES('$no_daftar','$ktp','$kk','$ijazah','$keterangan','$antrian')");

echo "<script>alert('Data berhasil disimpan');window.location='daftarulang.php';</script>";

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Daftar Ulang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Daftar Ulang Paspor</h2>

<div class="card">

<div class="card-body">

<form method="POST">

<div class="mb-3">

<label>Nama Pemohon</label>

<select name="no_daftar" class="form-control">

<?php

$data=mysqli_query($conn,"SELECT * FROM pendaftar");

while($d=mysqli_fetch_array($data)){

?>

<option value="<?= $d['no_daftar']; ?>">

<?= $d['nama_pemohon']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">

<label>KTP</label>

<select name="ktp" class="form-control">

<option>Ada</option>

<option>Tidak</option>

</select>

</div>

<div class="mb-3">

<label>KK</label>

<select name="kk" class="form-control">

<option>Ada</option>

<option>Tidak</option>

</select>

</div>

<div class="mb-3">

<label>Ijazah / Akta</label>

<select name="ijazah" class="form-control">

<option>Ada</option>

<option>Tidak</option>

</select>

</div>

<button class="btn btn-success" name="simpan">

Simpan

</button>

</form>

</div>

</div>

<hr>

<h3>Data Daftar Ulang</h3>

<table class="table table-bordered">

<tr>

<th>No</th>

<th>No Antrian</th>

<th>Nama</th>

<th>KTP</th>

<th>KK</th>

<th>Ijazah</th>

<th>Keterangan</th>

</tr>

<?php

$no=1;

$sql=mysqli_query($conn,"SELECT daftar_ulang.*,pendaftar.nama_pemohon
FROM daftar_ulang
JOIN pendaftar
ON daftar_ulang.no_daftar=pendaftar.no_daftar");

while($d=mysqli_fetch_array($sql)){

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['no_antrian']; ?></td>

<td><?= $d['nama_pemohon']; ?></td>

<td><?= $d['ktp']; ?></td>

<td><?= $d['kk']; ?></td>

<td><?= $d['ijazah']; ?></td>

<td><?= $d['keterangan']; ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>