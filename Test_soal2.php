<?php

$var = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

for($i = 0; $i < count($var); $i++) {
    if($data[$i] < 0) {
        echo "Tidak bisa di validasi sistem";
    } else {
        $tipenya = gettype($var[$i]);
        echo "- index ke $i adalah $tipenya dengan data $var[$i]\n";
    }
}