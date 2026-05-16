<?php
// 1. Membuat koneksi ke database lat_dbase
$con = mysqli_connect("localhost", "root", "", "lat_dbase");

// Memeriksa apakah koneksi berhasil
if (!$con) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}

// 2. Query SQL untuk mengupdate data 
$sql = "UPDATE tbl_mhs SET Age = '36' WHERE FirstName = 'Karina' AND LastName = 'Suwandi'";

// 3. Menjalankan query dan mengecek hasilnya
if (mysqli_query($con, $sql)) {
    echo "<h3>Latihan 1 Berhasil!</h3>";
    echo "Data Karina Suwandi telah diperbarui menjadi berumur 36 tahun.";
} else {
    echo "Gagal mengupdate data: " . mysqli_error($con);
}

// 4. Menutup koneksi database
mysqli_close($con);
?>