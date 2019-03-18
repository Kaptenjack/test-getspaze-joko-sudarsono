<?php

function faktorial($angka) {
    $result = 1;

    if ($angka <= 1) {
        return $result;
    }

    for ($i = 1; $i <= $angka; $i++) {
        $result = $angka * faktorial($angka-1);
    }

    return $result;
}

echo faktorial(5);