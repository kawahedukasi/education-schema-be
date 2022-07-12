<?php

$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

function fungsiFizzBuzz($item)
{
    if ($item % 5 == 0 && $item % 11 == 0) {
        echo "FizzBuzz\n";
    } elseif ($item % 5 == 0) {
        echo "Fizz\n";
    } elseif ($item % 11 == 0) {
        echo "Buzz\n";
    } else {
        echo $item . "\n";
    }
}

for ($i = 0; $i < count($data); $i++) {
    echo fungsiFizzBuzz($data[$i]);
}