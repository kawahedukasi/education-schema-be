<?php
/*
Nama : Ahmad Fakih Abdulwahab
Alamat Email: fakihabdulwahab@gmail.com  
Waktu Mulai : 19.20
Waktu Selesai : 19.55
*/

$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

for ($i=0; $i < count($data); $i++){
    if ($data[$i] === 5){
    	echo "Fizz <br>";
    } elseif ($data[$i] === 11 ){
    	echo "Buzz <br>";
    } else {
    	echo $data[$i]."<br>";
    }
}    
?>