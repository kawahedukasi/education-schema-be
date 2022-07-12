<?php

    $data = array(1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1);

    foreach ($data as $index => $nilai)

        if ($nilai < "0") {
            echo "index ke-" . $index . " adalah " . gettype($nilai) . " dengan data " . $nilai . " (Tidak bisa di validasi sistem) ". "<br>";
        }

        else {
            echo "index ke-" . $index . " adalah " . gettype($nilai) . " dengan data " . $nilai . "<br>";
        }

?>