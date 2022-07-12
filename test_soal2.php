<?php

$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];
for ($i = 0; $i <= 8; $i++) {
    if ($data[$i] < 0) {
        echo "index ke $i  Tidak bisa di validasi sistem";
    }

    if (is_int($data[$i]) && $data[$i] > 0) {
        echo "index ke $i  adalah integer dengan data $data[$i]\n";
    }

    if (is_string($data[$i])) {
        echo "index ke $i adalah string dengan data $data[$i]\n";
    }
}

?>
