<h2>Data : [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1] </h2>

<h3>
    <?php
    $data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];
    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i] > 0) {
            $j = $i + 1;
            echo "index ke " . $j . " adalah " . gettype($data[$i]) . " dengan data " . " $data[$i]";
            echo "<br />";
        } else {
            $j = $i + 1;
            echo "index ke " . $j . " Tidak bisa divalidasi sistem <br>";
        }
    }
    ?>
</h3>