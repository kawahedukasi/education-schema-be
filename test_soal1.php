<?php
    $data = array(1, 2, 4, 3, 10, 11, 20, 5, 100, 200);

    foreach ($data as $angka)
        if ($angka == "5") {
            echo "Fizz  <br>";
        }

        else if ($angka ==  "11") {
            echo "Buzz  <br>";
        }

        else {
            echo "$angka <br>";
        }


?>