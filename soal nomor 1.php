<?php

function deretBintang($limit) {
    $start = 1;
    $type = 'top';
    $currentVal = 1;

    for ($i = 1; $i <= $limit; $i++) {
        if ($currentVal <= $limit && $type == 'top') {
            for ($j = 1; $j <= $currentVal; $j++) {
                echo '*';
            }

            $currentVal = $currentVal + 2;
            echo "\n";
            
            if ($currentVal >= $limit) {
                $type = 'bottom';
            }

        } else if ($currentVal >= $start && $type == 'bottom') {
            for ($j = $currentVal; $j >= $start; $j--) {
                echo '*';
            }

            $currentVal = $currentVal - 2;
            echo "\n";
        }
    }
}

deretBintang(11);