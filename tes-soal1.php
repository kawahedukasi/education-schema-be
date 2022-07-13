<!-- 
Nama : Irvan Nur Alyasin
Email : irvannur540@gmail.com
    
Pertanyaan : 

    1. Kami mempunyai data array dengan nama variable  data : 

        var data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

        - buatlah program FizzBuzz dengan looping: 
            - Jika angka yang keluar adalah angka 5 maka output yang di hasilkan adalah "Fizz"
            - Jika angka yang keluar adalah angka 11 maka output yang di hasilkan adalah "Buzz"
            - Jika angka yang keluar adalah 5 dan 11 maka output yang di hasilkan adalah "FizzBuzz" -->

<?php 
    $arr = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200, 5, 11];

    foreach ($arr as $num) {
        if ($num === 5 ) {
            echo "<b>Fizz</b>";
        }elseif ($num === 11) {
            echo "<b>Buzz</b>";
        }else{
            echo $num;
        }
        echo "\t";
    }
?>