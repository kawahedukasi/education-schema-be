<?php

    $data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];
    $arrLength = count($data) - 1;
    
    for ($i = 0; $i <= $arrLength; $i++) {
        if ($data[$i] < 0) {
            echo "index ke-". $i . " Tidak Bisa Divalidasi Sistem \n";
        }
        else if (is_int($data[$i]) && $data[$i] > 0) {
            echo "index ke-" . $i . " adalah integer dengan data " . $data[$i] . "\n";
        }
        else {
            echo "index ke-" . $i . " adalah string dengan data " . $data[$i] . "\n";
        }
    }
?>
