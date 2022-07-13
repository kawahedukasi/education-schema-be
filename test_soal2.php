<?php
//Haikal Ferdian
//test soal 2
//Kawah Edukasi Batch III

$vardata = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];
for ($nilai = 0; $nilai <= 8; $nilai++) {
    if (is_int($vardata[$nilai]) && $vardata[$nilai] > 0) {
        echo "index ke-". $nilai . " adalah integer dengan data "
        . $vardata[$nilai] . "<br>";
    }

    if (is_string($vardata[$nilai])) {
        echo "index ke-". $nilai . " adalah string dengan data "
        . $vardata[$nilai] . "<br>";
    }

    if ($vardata[$nilai] < 0) {
        echo "index ke-". $nilai . " Tidak Bisa Divalidasi Sistem";
    }

}
?>