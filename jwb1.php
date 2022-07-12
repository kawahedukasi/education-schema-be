<?php

function fizzBuzz($angka)
{
    // Jika angka sama dengan 5 dan 11, tampilkan FizzBuzz
    if ($angka == 5 && $angka == 11) {
        echo "FizzBuzz\n";
        // Jika angka 5, tampilkan Fizz
    } elseif ($angka == 5) {
        echo "Fizz\n";
        // Jika angka 11, tampilkan Buzz
    } elseif ($angka == 11) {
        echo "Buzz\n";
        // Jika bukan 5 atau 11, tampilkan angka sebenarnya
    } else {
        echo $angka . "\n";
    }
}

$data = [1, 2, 4, 3, 10, 5, 11, 20, 5, 100, 200];

for ($i = 0; $i < count($data); $i++) {
    fizzBuzz($data[$i]);
}
