

<?php
    $data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

    for ( $i=0; $i < count($data); $i++) { 

        $dataI = $data[$i];

        if (is_integer($dataI) && $dataI >= 0) {
            echo "index ke " . $i . " adalah integer dengan data ". $dataI . "<br>";
        } else if (is_string($dataI)) {
            echo "index ke " . $i . " adalah string dengan data ". $dataI . "<br>";
        } else if (is_integer($dataI) && $dataI < 0) {
            echo "index ke " . $i . " tidak bisa divalidasi sistem <br>";
        } 
    }

<<<<<<< HEAD
    
=======
>>>>>>> 1656cd3577a477e83bbc7a276d11b96357574c4e
?>