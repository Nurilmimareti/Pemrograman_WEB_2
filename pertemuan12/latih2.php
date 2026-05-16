<?php
// 1. Membuat koneksi ke database lat_dbase
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$con) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}

// 2. Query SQL untuk menghapus data berdasarkan kriteria tertentu [cite: 20, 31]
$sql = "DELETE FROM tbl_mhs WHERE LastName='Prabowo'";

// 3. Menjalankan query dan mengecek hasilnya
if (mysqli_query($con, $sql)) {
    echo "<h3>Latihan 2 Berhasil!</h3>";
    echo "Data mahasiswa dengan nama belakang 'Prabowo' telah berhasil dihapus.";
} else {
    echo "Gagal menghapus data: " . mysqli_error($con);
}

// 4. Menutup koneksi database
mysqli_close($con);
?>