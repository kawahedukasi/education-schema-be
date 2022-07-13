<!-- 
Nama : Irvan Nur Alyasin
Email : irvannur540@gmail.com
    
Pertanyaan :

    2. Buatlah program untuk pengecekan tipe data:

        var data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

        hasil yang di inginkan: 
        - index ke 0 adalah integer dengan data 1
        - index ke 1 adalah string dengan data kawah
        - dan jika nilai dari index itu kurang dari  0 maka keluarkan output:  Tidak bisa di validasi sistem

        contoh : 
        var contoh = [1, "mantap", 0 ];
        expektasi output: 
        - index ke 0 adalah integer dengan data 1
        - index ke 1 adalah string dengan data mantap
        - index ke 2 Tidak bisa di validasi sistem

        buatlah programnya sampai semua data tervalidasi -->

<?php 
    $arr = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1, 0];

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] <= 0 && is_int($arr[$i])) {
            echo "index ke <b>$i</b> Tidak bisa di validasi sistem <br>";
        } elseif (is_int($arr[$i])) {
            echo "index ke <b>$i</b> adalah integer dengan data <b>$arr[$i]</b> <br>";
        } else {
            echo "index ke <b>$i</b> adalah string dengan data <b>$arr[$i]</b> <br>";
        }
    }
?>