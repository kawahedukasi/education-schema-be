<?php
$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

for ($i = 0; $i < count($data); $i++) {
	if(is_int($data[$i]) && $data[$i] < 0)
	{
		echo 'index ke '. $i .' Tidak bisa di validasi sistem';
	}
	else
	{
		echo 'index ke '. $i .' adalah '. gettype($data[$i]) .' dengan data '.$data[$i].'<br/>';
	}
}
?>