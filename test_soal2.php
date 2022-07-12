<!DOCTYPE html>
<html>

<body>

    <?php
    $data = array(1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1);
    ksort($data);

    foreach ($data as $index => $nilai)
        if ($nilai < "0") {
            echo "Tidak bisa di validasi sistem <br>";
        } else {
            echo "Index Ke " . $index . " Adalah " . gettype($nilai) . " Dengan data " . $nilai . "<br>
<br>";
        }

    ?>

</body>

</html>