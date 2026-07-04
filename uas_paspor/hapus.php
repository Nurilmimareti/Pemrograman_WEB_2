<?php

include "koneksi.php";

$id=$_GET['id'];

mysqli_query($conn,"DELETE FROM pendaftar WHERE no_daftar='$id'");

header("location:data.php");

?>