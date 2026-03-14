<html> 
<head> 
    <title>Test Penyisipan PHP Pada HTML</title> [cite: 98]
</head> 
<body> 
    Kapal Asing, Silakan identifikasikan diri Anda! <br> [cite: 101]
    <?php 
    $namad = "Jean"; [cite: 104]
    $namat = "Luc"; [cite: 105]
    $namab = "Piccard"; [cite: 106]
    $nilai1 = 25; [cite: 107]
    $nilai2 = 50; [cite: 108]
    $hasil = $nilai1 * $nilai2; [cite: 109]
    $a = 2; [cite: 110]
    $b = 3; [cite: 112]
    $hsl = pow($a, $b); [cite: 112]
    ?> 
    <b>Ini adalah kapal Federasi Planet USS Enterprise.<br> [cite: 114]
    <?php 
    echo "Saya $namab, $namad $namat $namab, kapten kapal.</b><br>"; [cite: 116]
    echo "$nilai1 x $nilai2 = $hasil<br>"; [cite: 117]
    echo "$a ^ $b = $hsl"; [cite: 118]
    ?> 
</body> 
</html>