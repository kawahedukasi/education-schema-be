<?php

$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

for ($x = 0; $x < count($data); $x++) {
    if (is_int($data[$x]) == TRUE) {
        if ($data[$x] < 0) {
            echo "index ke $x Tidak bisa di validasi sistem. <br>";
        } else {
            echo "index ke $x adalah integer dengan data $data[$x]. <br>";
        }
    } elseif (is_string($data[$x]) == TRUE) {
        echo "index ke $x adalah string dengan data $data[$x]. <br>";
    }
}