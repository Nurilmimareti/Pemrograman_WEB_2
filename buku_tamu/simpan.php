<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$pesan = $_POST['pesan'];

$query = "INSERT INTO tamu
(nama,email,no_hp,alamat,pesan)
VALUES
('$nama','$email','$no_hp','$alamat','$pesan')";

if(mysqli_query($conn,$query)){
    echo "Data berhasil disimpan";
}else{
    echo "Data gagal disimpan";
}
?>