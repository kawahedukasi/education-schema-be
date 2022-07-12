<?php

$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

for ($x = 0; $x < count($data); $x++) {
    switch ($data[$x]) {
        case 5:
          echo "Fizz <br>";
          break;
        case 11:
          echo "Buzz <br>";
          break;
        default:
          echo "$data[$x] <br>";
    }
} 
