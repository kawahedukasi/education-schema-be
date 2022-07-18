<?php

$var = array(1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1);
    foreach ($var as $data => $array)
        if ($array < "0") {
            echo "index ke " .$data. " adalah " .gettype($array). " dengan data " .$array. " Tidak bisa di validasi sistem ". "\n";
        }
        else {
            echo "index ke " .$data. " adalah " .gettype($array). " dengan data " .$array. "\n";
        }
?>
