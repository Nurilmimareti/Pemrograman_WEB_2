<?php
$A = 123 ; // variable global [cite: 71]
function Test() {
    global $A ; // mengakses variable global [cite: 71]
    echo "Nilai A dalam fungsi = $A \n"; [cite: 72]
}
Test(); [cite: 72]
echo "Nilai A luar fungsi = $A \n"; [cite: 72]
?>