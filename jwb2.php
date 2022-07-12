<?php
$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1, 0];

for ($i = 0; $i < count($data); $i++) {
    if ($data[$i] <= 0 && is_int($data[$i])) {
        echo "index ke ", $i, " Tidak bisa di validasi sistem", "<br>";
    } elseif (is_int($data[$i])) {
        echo "index ke ", $i, " adalah integer dengan data ", $data[$i], "<br>";
    } elseif (is_string($data[$i])) {
        echo "index ke ", $i, " adalah string dengan data ", $data[$i], "<br>";
    }
}
