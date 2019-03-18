<?php

function fibonacci($panjangBilangan) {
    $angkaSebelumnya = 0;
    $angkaSekarang = 1;
    echo "$angkaSebelumnya \n $angkaSekarang \n";
    
    for ($i = 0; $i <= $panjangBilangan; $i++) {
        $result = $angkaSekarang + $angkaSebelumnya;
        echo floatval($result) . "\n";

        $angkaSebelumnya = $angkaSekarang;
        $angkaSekarang = $result;
    }
}

fibonacci(120);