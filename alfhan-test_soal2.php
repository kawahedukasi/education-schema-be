2. Buatlah program untuk pengecekan tipe data:

    var data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

    hasil yang di inginkan: 
    - index ke 0 adalah integer dengan data 1
    - index ke 1 adalah string dengan data kawah
    - dan jika nilai dari index itu kurang dari  0 maka keluarkan output:  Tidak bisa di validasi sistem

jawaban

<?php
    $var = array(1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1);
    foreach ($var as $data => $nomer)
        if ($nomer < "0") {
            echo "index ke-" . $data . " adalah " . gettype($nomer) . " dengan data " . $nomer . " (Tidak bisa di validasi sistem) ". "<br>"; }
        else {
            echo "index ke-" . $data . " adalah " . gettype($nomer) . " dengan data " . $nomer . "<br>";}
?>
