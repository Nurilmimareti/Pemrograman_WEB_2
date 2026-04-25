<<<<<<< HEAD
<html>
<head>
<title>Contoh Counter</title>
</head>
<body>
 <?php
 $nama_file="counter.dat";
 If (file_exists($nama_file))
 {
  $berkas = fopen($nama_file,"r");
  $pencacah = (integer)trim(fgets($berkas, 255));
  $pencacah++;
  Fclose($berk
}
 Else
  $pencacah = 1;
  // simpan pencacah
  $berkas = fopen($nama_file,"w");
  Fputs($berkas, $pencacah);
  Fclose($berkas);
 
  // tulis ke halaman web
  Print("Anda pengunjung ke-$pencacah <br>\n");   ?>
</body>
=======
<html>
<head>
<title>Contoh Counter</title>
</head>
<body>
 <?php
 $nama_file="counter.dat";
 If (file_exists($nama_file))
 {
  $berkas = fopen($nama_file,"r");
  $pencacah = (integer)trim(fgets($berkas, 255));
  $pencacah++;
  Fclose($berk
}
 Else
  $pencacah = 1;
  // simpan pencacah
  $berkas = fopen($nama_file,"w");
  Fputs($berkas, $pencacah);
  Fclose($berkas);
 
  // tulis ke halaman web
  Print("Anda pengunjung ke-$pencacah <br>\n");   ?>
</body>
>>>>>>> d428e9627f68f2b273a48c354e34965612138d18
</html>