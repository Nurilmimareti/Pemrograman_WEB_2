<?php
$A = 123 ; // variable global [cite: 66]
function Test() {
    $A = "Test"; // variable local [cite: 66, 67]
    echo "Nilai A dalam fungsi = $A \n"; [cite: 67]
}
Test(); [cite: 67]
echo "Nilai A luar fungsi = $A \n"; [cite: 67]
?>