<?php
include 'koneksi.php';

$data = mysqli_query($conn,"SELECT * FROM tamu");
?>

<table border="1" cellpadding="10">

<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>No HP</th>
<th>Alamat</th>
<th>Pesan</th>
</tr>

<?php
$no=1;
while($d=mysqli_fetch_array($data)){
?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['nama']; ?></td>
<td><?php echo $d['email']; ?></td>
<td><?php echo $d['no_hp']; ?></td>
<td><?php echo $d['alamat']; ?></td>
<td><?php echo $d['pesan']; ?></td>
</tr>

<?php } ?>

</table>