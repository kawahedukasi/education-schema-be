<?php 

// hasil yang di inginkan: 
// - index ke 0 adalah integer dengan data 1
// - index ke 1 adalah string dengan data kawah
// - dan jika nilai dari index itu kurang dari  0 maka keluarkan output:  Tidak bisa di validasi sistem

// contoh : 
// var contoh = [1, "mantap", 0 ];
// expektasi output: 
// - index ke 0 adalah integer dengan data 1
// - index ke 1 adalah string dengan data mantap
// - index ke 2 Tidak bisa di validasi sistem

$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];
// buatlah programnya sampai semua data tervalidasi
function validasi($key, $value) {
    $result = "";
    if ($value < 0 && is_int($value)) {
        $result = "Tidak bisa di validasi sistem";
    } else if (is_int($value)) {
        $result = "adalah integer dengan data " . $value;
    } else if (is_string($value)) {
        $result ="adalah string dengan data " . $value;
    } 
    return "index ke ".$key." ".$result;
}


foreach ($data as $key => $value) {
    echo validasi($key, $value). "\n";
}
