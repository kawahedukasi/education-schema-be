<?php
// Sample : 
// var contoh = [1, "mantap", 0 ];
// expektasi output: 
// - index ke 0 adalah integer dengan data 1
// - index ke 1 adalah string dengan data mantap
// - index ke 2 Tidak bisa di validasi sistem

//var data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];
 $data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

//Program cek data (tervalidasi semua)
function cek($kunci, $nilai) {
  $hasil = "";
//pengecekan data jika kurang dari 0 dan data adalah integer maka ditampilkan "Tidak bisa divalidasi sistem"
if ($nilai < 0 && is_int ($nilai)) {
  $hasil = "Tidak bisa divalidasi Sistem";
}
//pengecekan data jika data adalah integer maka ditampilkan "adalah integer dengan data"
  else if (is_int($nilai)) {
    $hasil = "adalah integer dengan data " . $nilai;
  } 
  //pengecekan data apabila berupa string maka ditampilkan "adalah string dengan data"
  else if (is_string($nilai)) {
    $hasil = "adalah string dengan data ".$nilai;
  }
   return "index ke-".$kunci." ".$hasil;
}
//perulangan khusus untuk membaca nilai array
foreach ($data as $kunci => $nilai) {
  //Menampilkan hasil cek data
    echo cek($kunci, $nilai). "\n";
}