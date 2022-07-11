<?php

$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];
for ($d = 0; $d <= 8; $d++) {
    if (is_int($data[$d]) && $data[$d] > 0) {
        echo "index ke-". $d . " adalah integer dengan data "
        . $data[$d] . "<br>";
    }
    
    if (is_string($data[$d])) {
        echo "index ke-". $d . " adalah string dengan data "
        . $data[$d] . "<br>";
    }
    
    if ($data[$d] < 0) {
        echo "index ke-". $d . " tidak bisa divalidasi";
    }
    
}
?>
