<?php 


// - buatlah program FizzBuzz dengan looping: 
// - Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Fizz"
// - Jika angka yang keluar adalah angka 11 maka output yang di hasilkan adalah "Buzz"
// - Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz"

$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];
foreach ($data as $angka) {
    // Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz"
    if ($angka == 5 && $angka == 11) {
        echo "FizzBuzz" . "\n";
    // Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Fizz"
    } else if ($angka == 5) {
        echo "Fizz" . "\n";
    // Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Buzz"
    } else if ($angka == 11) {
        echo "Buzz" . "\n";
    } 
}