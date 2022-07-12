<?php

  $data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

 for($i = 0; $i<count($data); $i++){
    $temp = $data[$i];

    if($data[$i]==5 && $temp="11"){
        echo"$data[$i] $temp = FizzBuzz\n";
    }
    if ($data[$i]==5){
        echo"$data[$i] = Fizz\n";
    }
    if ($data[$i]==11){
        echo"$data[$i] = Buzz\n";
    }
 }
?>
