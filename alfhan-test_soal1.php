1. Kami mempunyai data array dengan nama variable  data : 

    var data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

    - buatlah program FizzBuzz dengan looping: 
        - Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Fizz"
        - Jika angka yang keluar adalah angka 11 maka output yang di hasilkan adalah "Buzz"
        - Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz"

jawaban
<?php
    $var = array(1, 2, 4, 3, 10, 11, 20, 5, 100, 200);
    foreach ($var as $nomer)
        if ($nomer == "5") {
            echo "Fizz  <br>";
        }
        else if ($nomer ==  "11") {
            echo "Buzz  <br>";
        }
        else {
            echo "$nomer <br>";
        }
?>
