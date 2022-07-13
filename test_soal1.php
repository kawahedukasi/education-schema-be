<?php

//Soal: Kami mempunyai data array dengan nama variable  data : 
//var data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];
//buatlah program FizzBuzz dengan looping: 
//Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Fizz"
//Jika angka yang keluar adalah angka 11 maka output yang di hasilkan adalah "Buzz"
//Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz"

//............................................................................
$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200, 5&&11];

function ProgramfizzBuzz($nomor)
  
{
    // Jika nomor yang keluar 5 dan 11,Maka output FizzBuzz
    if ($nomor == 5 && $nomor == 11) {
        echo "FizzBuzz\n";
        // Jika nomor 5 saja, Outputnya Fizz
    } elseif ($nomor == 5) {
        echo "Fizz\n";
        // Jika angka 11 saja, Outuputya Buzz
    } elseif ($nomor == 11) {
        echo "Buzz\n";
        // Jika bukan 5 atau 11, tampilkan angka aslinya
    } else {
        echo $nomor . "\n";
    }
}

for ($i = 0; $i < count($data); $i++) {
    ProgramfizzBuzz($data[$i]);
}