<?php
include "koneksi.php";

if(isset($_POST['proses'])){

    $id=$_POST['id'];

    $ambil=mysqli_query($conn,"
        SELECT daftar_ulang.*, pendaftar.nama_pemohon
        FROM daftar_ulang
        JOIN pendaftar
        ON daftar_ulang.no_daftar=pendaftar.no_daftar
        WHERE daftar_ulang.id='$id'
    ");

    $d=mysqli_fetch_assoc($ambil);

    if($d['keterangan']=="OK"){

        $status="Diterima";
        $berkas="Lengkap";
        $ket="OK";
        $bayar=355000;

    }else{

        $status="Ditolak";
        $berkas="Tidak Lengkap";
        $ket="Belum Lengkap";
        $bayar=0;

    }

    mysqli_query($conn,"
        INSERT INTO pengurusan
        (no_antrian,no_daftar,nama_pemohon,berkas,status,keterangan,pembayaran)
        VALUES
        (
        '$d[no_antrian]',
        '$d[no_daftar]',
        '$d[nama_pemohon]',
        '$berkas',
        '$status',
        '$ket',
        '$bayar'
        )
    ");

    echo "<script>
    alert('Pengurusan berhasil');
    window.location='pengurusan.php';
    </script>";

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Pengurusan Paspor</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Pengurusan Paspor</h2>

<div class="card">

<div class="card-body">

<form method="POST">

<label>Pilih Pemohon</label>

<select class="form-control mb-3" name="id">

<?php

$data=mysqli_query($conn,"
SELECT daftar_ulang.*,pendaftar.nama_pemohon
FROM daftar_ulang
JOIN pendaftar
ON daftar_ulang.no_daftar=pendaftar.no_daftar
");

while($x=mysqli_fetch_array($data)){

?>

<option value="<?= $x['id']; ?>">

<?= $x['nama_pemohon']; ?> |
Antrian <?= $x['no_antrian']; ?>

</option>

<?php } ?>

</select>

<button class="btn btn-primary" name="proses">

Proses

</button>

</form>

</div>

</div>

<hr>

<h3>Hasil Pengurusan</h3>

<table class="table table-bordered">

<tr>

<th>No</th>
<th>Antrian</th>
<th>Nama</th>
<th>Berkas</th>
<th>Status</th>
<th>Keterangan</th>
<th>Pembayaran</th>

</tr>

<?php

$no=1;

$sql=mysqli_query($conn,"SELECT * FROM pengurusan");

while($d=mysqli_fetch_array($sql)){

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $d['no_antrian']; ?></td>

<td><?= $d['nama_pemohon']; ?></td>

<td><?= $d['berkas']; ?></td>

<td><?= $d['status']; ?></td>

<td><?= $d['keterangan']; ?></td>

<td>Rp <?= number_format($d['pembayaran']); ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>