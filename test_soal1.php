<?php

/*
1. Kami mempunyai data array dengan nama variable  data : 

    var data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

    - buatlah program FizzBuzz dengan looping: 
        - Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Fizz"
        - Jika angka yang keluar adalah angka 11 maka output yang di hasilkan adalah "Buzz"
        - Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz"
*/

$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

/*
*Berdasarkan pengalaman membuat program dengan judul serupa menggunakan kelipatan.
*Jadi, jika 'angka yang keluar' yang dimaksud adalah kelipatan dari. Maka programnya sebagai berikut.
*Sedangkan dikarenakan tidak ada perintah output dua kali atau menggunakan nested-loop. 
*Jika yang dimaksud tidak seperti ini maka, kalimat sulit dimengerti untuk diimplementasikan.
*Dikarenakan ada syarat 'Jika angka yang keluar adalah 5 dan 11'.
*/
foreach($data as $i) {
    if( $i % 5 == 0 && $i %  11 == 0) {
        echo "FizzBuzz";
    } else if($i % 5 == 0) {
        echo "Fizz";
    } else if($i %  11 == 0) {
        echo "Buzz";
    } else {
        echo $i;
    }
    echo "\t";
};

?>